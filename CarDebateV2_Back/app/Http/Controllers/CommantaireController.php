<?php

namespace App\Http\Controllers;

use App\Models\Commantaire;
use Illuminate\Http\Request;

class CommantaireController extends SuperController
{
    public function __construct(commantaire $model)
    {
        parent::__construct($model);
    }

    public function getAll() // : Collection
    {
        $list = $this->_context
            ->orderBy('id', 'desc')
            // ->skip($startIndex)
            // ->take($pageSize)
            ->with(['utilisateur'])
            ->get()
            ;

        // $count = $this->_context->get()->count();

        return $list;
    }
}
