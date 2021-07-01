<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    protected $guarded = [];
      public function modele()
    {
        return $this->belongsTo('App\Models\Modele', 'idmodele');
    }

    public function carburant()
    {
        return $this->belongsTo('App\Models\Carburant', 'idcarburant');
    }

    public function transmission()
    {
        return $this->belongsTo('App\Models\Transmission', 'idtransmission');
    }

    public function carousserie()
    {
        return $this->belongsTo('App\Models\carousserie', 'idcarousserie');
    }
}
