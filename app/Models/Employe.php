<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employe extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom', 
        'prenom', 
        'email'
    ];

    public function campuses() 
    {
        return $this->belongsToMany(Campuse::class, 'frequentations', 'id_employe', 'id_campuse');
    }

    public function voitures()
    {
        return $this->hasMany(Voiture::class, 'id_employe');
    }

    public function trajets()
    {
        return $this->belongsToMany(Trajet::class, 'est_passagers', 'id_employe', 'id_trajet');
    }

    public function getNbVoitures() {
        return $this->voitures()->count();
    }

    public function haveVoiture(string $modele) {
        return $this->voitures()->where('modele', $modele)->exists();
    }

    public function getStatut() {
        $nbVoitures = $this->getNbVoitures();
        if ($nbVoitures == 0) {
            return "Pas conducteur";
        }
        else if ($nbVoitures == 1) {
            return "Conducteur";
        }
        else {
            return "Conducteur très actif";
        }
    }
}
