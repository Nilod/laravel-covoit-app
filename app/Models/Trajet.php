<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class Trajet extends Model
{
    protected $fillable = [
        'date_time_depart', 
        'date_time_arrivee', 
        'id_campuse_depart', 
        'id_campuse_arrivee', 
        'id_voiture'
    ];

    public function voiture() {
        return $this->belongsTo(Voiture::class, 'id_voiture');
    }

    public function employes() {
        return $this->belongsToMany(Employe::class, 'est_passager', 'id_trajet', 'id_voiture');
    }

    public function campuseDepart() {
        return $this->belongsTo(Campuse::class, 'id_campuse_depart');
    }

    public function campuseArrivee() {
        return $this->belongsTo(Campuse::class, 'id_campuse_arrivee');
    }
}
