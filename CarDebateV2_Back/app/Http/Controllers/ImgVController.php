<?php

namespace App\Http\Controllers;

use App\Models\ImgV;
use Illuminate\Http\Request;

class ImgVController extends SuperController
{
    public function __construct(imgV $model)
    {
        parent::__construct($model);
    }

    public function getAll() // : Collection
    {
        $list = $this->_context
            ->orderBy('id', 'desc')
            // ->skip($startIndex)
            // ->take($pageSize)
            ->with(['version'])
            ->get()
            ;

        // $count = $this->_context->get()->count();

        return $list;
    }
}
