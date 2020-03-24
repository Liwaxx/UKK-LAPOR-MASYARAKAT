<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Role;
use App\Status;

class AdminController extends Controller
{
    public function pageUser()
    {
        $petugas = User::where('id_role', 2)->get();
        $user = User::where('id_role', 2)->get();
        $admin = User::where('id_role', 3)->get();

        return view('pages\admin\admin1')->with(['petugas' => $petugas, 'admin' => $admin, 'user' => $user]);
    }
    public function pageLainnya()
    {
        $kategori = Kategori::all();
        $role = Role::all();
        $status = Status::all();

        return view('pages\admin\admin2')->with(['kategori' => $kategori, 'role' => $role, 'status' => $status]);
    }
}
