<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use App\Http\Controllers\FacadesJWTAuth;

class UtilisateurController extends SuperController
{
    public function __construct(utilisateur $model)
    {
        parent::__construct($model);
    }

    public function getAll() // : Collection
    {
        $list = $this->_context
            ->orderBy('id', 'desc')
            // ->skip($startIndex)
            // ->take($pageSize)
            ->get()
            ;

        // $count = $this->_context->get()->count();

        return $list;
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            //'role' => 'required'
        ]);

        // $request->email
        $email = $request->get('email');
        $password = $request->get('password');
        //$role = $request->get('role');


        $user = $this->_context
            ->where('email', $email)
            ->first()
            ;

        if ($user == null) {
            return [
                'code' => -1 ];
        } else if ($user->password != $password) {
            return ['code' => 0];
        // } else if ($user->role != 'admin') {
        //     return ['code' => 1];
         }

      return [
          'code' => 1,
          'user' => $user
          
      ];

    }

    public function register(Request $request)
    {
        return $this->_context->create($request->all());
    }

    public function createToken($user) {

        // $customClaims = ['role' => $user->role];

        // JWTAuth::attempt($credentials, $customClaims);
        $customClaims = ['myrole' => $user->role];

        // $payload = JWTFactory::make($customClaims);

        // $token = JWTAuth::encode($payload);

        // $factory = JWTFactory::customClaims([
        //     'sub'   => env('API_ID'),
        // ]);

        // $payload = JWTFactory::customClaims(['id' => 'ff'])->make();
        // $token = JWTAuth::encode($payload);
        // or
        $user->customField = 'benhamida';
        //$token = FacadesJWTAuth::fromUser($user, $customClaims);


        //return $token;
    }





    
}


