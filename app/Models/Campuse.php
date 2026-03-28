<?php

namespace App\Models;

use EmptyIterator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campuse extends Model
{
    use HasFactory;

    protected $fillable = [
        'description', 
        'adresse', 
        'type'
    ];

    public function employes() {
        return $this->belongsToMany(Employe::class, 'frequentations', 'id_campuse', 'id_employe');
    }

    public function trajetsDepart() {
        return $this->hasMany(Trajet::class, 'id_campuse_depart');
    }

    public function trajetsArrivee() {
        return $this->hasMany(Trajet::class, 'id_campuse_arrivee');
    }
}
