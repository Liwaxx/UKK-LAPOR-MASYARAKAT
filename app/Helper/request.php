<?php

namespace App\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class requestValidator {

    public function Login(Request $request)
    {
        $validation =  Validator($request->all(), [
            'email' => 'required | email',
            'password' => 'required | min:6'
        ]);

        return $validation;
    }
    public function Register(Request $request)
    {
        $validation =  Validator($request->all(), [
            'email' => 'required | email',
            'password' => 'required | min:6',
            'nama' => 'required | min:4',
            'umur' => 'required | number',
        ]);

        return $validation;
    }
}
