<?php

namespace App\Http\Controllers;

use App\Models\Version;
use Illuminate\Http\Request;

class VersionController extends SuperController
{
    public function __construct(version $model)
    {
        parent::__construct($model);
    }

    public function getAll() // : Collection
    {
        $list = $this->_context
            ->orderBy('id', 'desc')
            // ->skip($startIndex)
            // ->take($pageSize)
             ->with(['modele','carburant','transmission','carousserie'])
            ->get()
            ;

        // $count = $this->_context->get()->count();

        return $list;
    }


    public function getByModel(int $id) // : Collection
    {
        $list = $this->_context
            ->where('idmodel', $id)
          
            ->get()
            ;

        

        return $list;
    }

}
