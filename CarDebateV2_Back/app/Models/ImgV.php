<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgV extends Model
{
    protected $guarded = [];

    public function version()
    {
        return $this->belongsTo('App\Models\Version', 'idversion');
    }

}
