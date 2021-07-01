<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $guarded = [];

    public function utilisateur()
    {
        return $this->belongsTo('App\Models\Utilisateur', 'idUtilisateur');
    }

}
