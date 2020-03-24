<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    public function insert(Request $request)
    {
        $nama = $request->nama;
        $data = Kategori::create([
            'nama' => $nama
        ]);
        if($data->save()){
            return redirect('/admin/lainnya')->with('alert-success', 'Berhasil tambah kategori');
        }
        else{
            return redirect('/admin/lainnya')->with('alert-fail', 'Gagal tambah kategori');
        }
    }
    public function update()
    {

    }
    public function delete()
    {

    }
}
