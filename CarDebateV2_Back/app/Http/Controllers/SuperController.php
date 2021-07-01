<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class SuperController extends Controller
{
    protected  $_context;

    public function __construct($context)
    {
        $this->_context = $context;
    }

    public function index()
    {
        return $this->_context->get();
        // return $this->_context->all();
    }

    public function getList(int $startIndex, int $pageSize, string $sortBy, string $sortDir) // : Collection
    {
        $list = $this->_context
            ->orderBy($sortBy, $sortDir)
        
            ->skip($startIndex)
            ->take($pageSize)
            ->get()
            ;

        $count = $this->_context->get()->count();

        return ['list' => $list, 'count' => $count];
    }

    public function getByForeignkey(string $propertyName, $value): Collection
    {
        $res = $this->_context
            ->where($propertyName, $value)
            ->get()
            ;

        return $res;
    }

    public function autocomplete(string $column, $value): Collection
    {
        $res = $this->_context
            ->where($column, 'LIKE', "%{$value}%")
            ->get()
            ;

        return $res;
    }

    public function query(Request $request, int $startIndex, int $pageSize, int $sortBy, int $sortDr)
    {
        $res = $this->_context;
        $res = $res->skip($startIndex)
        ->take($pageSize)
        ->orderBy($sortBy, $sortDr);
        return [
            'result' => $res->get(),
            'all' => $request->all()
        ];
    }

    public function search(Request $request)
    {
        // $res = $this->_context;

        // foreach($request->all() as $key => $value) {
        //     // echo "{$key} => {$value} ";
        //     $res = $res->where($key, 'LIKE', "%{$value}%");
        // }
        $skip = $request->input('skip');
        $take = $request->input('take');
        $sort = $request->input('sort');
        $filters = $request->input('filter');
        $res = $this->_context->skip($skip)->take($take);
        if ($sort != null) {
            $pieces = explode(" ", $sort);
            $sortBy = $pieces[0];
            $sortDr =  $pieces[1];

            $res = $res->orderBy($sortBy, $sortDr);
        } else {
            $res = $res->orderBy('id', 'desc');
        }

        // var_dump($filters);
        // dd($filters);
        if ($filters != null) {
            $f = explode(',"and",', substr($filters, 1, -1));
            // dd(json_decode($f[0]));
            foreach ($f as $e){
                $column = json_decode($e)->{'column'};
                $filter = json_decode($e)->{'filter'};
                $value = json_decode($e)->{'value'};
                $res = $res->where($column, 'LIKE', "%{$value}%");
            }
        }


        return [
            'items' => $res->get(),
            // 'filters' => $filters,
            'totalCount' =>  $this->_context->count()
        ];
    }

    public function search2(Request $request): Collection
    {
        $res = $this->_context;

        foreach($request->all() as $key => $value) {
            // echo "{$key} => {$value} ";
            $res = $res->where($key, 'LIKE', "%{$value}%");
        }
        return $res->get();
    }





    public function store(Request $request)
    {
        return $this->_context->create($request->all());
    }

    public function show($id)
    {
        return $this->_context->where('id', $id) ->first();
    }

    public function update(Request $request, $id)
    {
        return (string) $this->_context->find($id)->update($request->all());
    }

    public function destroy($id)
    {
        return $this->_context->destroy($id);
    }
}
