<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//LOGIN
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', 'AuthController@checklogin');

//LOGOUT
Route::get('/logout', 'AuthController@logout');

//REGISTER
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', 'AuthController@postRegis');

//LOGIN ONLY
Route::group(['middleware' => ['auth','revalidate']], function () {
    Route::prefix('user')->group(function() {
        Route::get('/', function () {
            return view('pages.user.dashboard');
        });
        Route::get('/lapor', function () {
            return view('pages.user.buatLaporan');
        });
    });
});

//PREFIX USER

//PREFIX ADMIN
Route::prefix('admin')->group(function() {

    Route::get('/', function () {
        return view('pages.admin.dashboard');
    });
    Route::get('/data-user', 'AdminConrtoller@pageUser');
    Route::get('/lainnya', 'AdminController@pageLainnya');

    //KATEGORI
    Route::post('/add-kategori', 'KategoriController@insert')->name('add-kategori');
});

//PREFIX PETUGAS
Route::prefix('petugas')->group(function (){
    Route::get('/', function () {
        return view('pages.petugas.dashboard');
    });
});

