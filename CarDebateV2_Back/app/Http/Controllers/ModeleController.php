<?php

namespace App\Http\Controllers;

use App\Models\Modele;
use Illuminate\Http\Request;

class ModeleController extends SuperController
{
    
    public function __construct(modele $model)
    {
        parent::__construct($model);
    }

    public function getAll() // : Collection
    {
        $list = $this->_context
            ->orderBy('id', 'desc')
            // ->skip($startIndex)
            // ->take($pageSize)
            ->with(['marque'])
            ->get()
            ;

        // $count = $this->_context->get()->count();

        return $list;
    }

    public function getByMarque(int $id) // : Collection
    {
        $list = $this->_context
            ->where('idmarque', $id)
          
            ->get()
            ;

        

        return $list;
    }


}
