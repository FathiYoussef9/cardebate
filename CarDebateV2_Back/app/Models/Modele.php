<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    protected $guarded = [];
    public function marque()
    {
        return $this->belongsTo('App\Models\Marque', 'idmarque');
    }
}
