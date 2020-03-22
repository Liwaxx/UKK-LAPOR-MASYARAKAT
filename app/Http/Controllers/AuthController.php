<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\requestValidator;
use Illuminate\Support\Facades\Auth;
use App\User;



class AuthController extends Controller
{
    public function checklogin(Request $request)
    {
        $reqHelper = new requestValidator();

        if($reqHelper->Login($request)){
            return redirect('/login')->withErrors('Validasi gagal, silahkan check email dan password anda!');
        }

        if(User::where('email', $request->email)->count() == 0 ){
            return redirect('/login')->withErrors('Email belum terdaftar');
        }
        else{
            $crd =  ['email' => $request->email, 'password' => $request->password];

            if(Auth::attempt($crd)){
                if(Auth::user()->id_role == 1){
                    return redirect('/user');
                }
                else if(Auth::user()->id_role == 2){
                    return redirect('/petugas');
                }
                else{
                    return redirect('/admin');
                }
            }
            else{
                return redirect('/login')->withErrors('Email atau password anda salah');
            }
        }

    }
    public function postRegis(Request $request)
    {
        $reqHelper = new requestValidator();

        if($reqHelper->Register($request)){
            return redirect('/register')->withErrors('Validasi gagal, silahkan check form anda!');
        }

        $data = User::insert([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'alamat' => $request->alamat,
            'id_role' => 1
        ]);

        if($data){
            return redirect('/login')->with('message', 1);
        }
    }
}
