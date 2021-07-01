<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    protected $guarded = [];

    public function pays()
    {
        return $this->belongsTo('App\Models\Pays', 'idpays');
    }

  

}
