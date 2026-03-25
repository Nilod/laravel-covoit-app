<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstPassager extends Model
{
    protected $fillable = [
        'date_inscription', 
        'id_employe', 
        'id_trajet'
    ];
    
}
