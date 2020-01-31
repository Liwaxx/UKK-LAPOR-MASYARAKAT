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
    }
    public function Register(Request $request)
    {

    }
}
