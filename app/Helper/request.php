<?php

namespace App\Helper;
use Illuminate\Support\Facades\Validator;

class requestValidator {

    public function Login($data)
    {
        $validation =  Validator($data->all(), [
            'email' => 'required | email',
            'password' => 'required | min:6'
        ]);
        if($validation->fails()){
            return true;
        }
        return false;
    }
    public function Register($data)
    {
        $validation =  Validator($data->all(), [
            'email' => 'required | email',
            'password' => 'required | min:6',
            'nama' => 'required | min:4',
            'umur' => 'required | max:2',
            'alamat' => 'required | min:10'
        ]);

        if($validation->fails()){
            return true;
        }
        return false;
    }
}
