<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgAnnonce extends Model
{
    protected $guarded = [];

    public function annonce()
    {
        return $this->belongsTo('App\Models\Annonce', 'idAnnonce');
    }

}
