<?php

namespace App\Http\Controllers;

use App\Models\ImgAnnonce;
use Illuminate\Http\Request;

class ImgAnnonceController extends SuperController
{
    public function __construct(imgAnnonce $model)
    {
        parent::__construct($model);
    }

    public function getAll() // : Collection
    {
        $list = $this->_context
            ->orderBy('id', 'desc')
            // ->skip($startIndex)
            // ->take($pageSize)
            ->with(['annonce'])
            ->get()
            ;

        // $count = $this->_context->get()->count();

        return $list;
    }
}
