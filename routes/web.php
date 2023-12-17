<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\LaporanController;


Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', [AdminController::class, 'lihat']);

Route::get('/register', function () {
    return view('tambah_user', [
        'judul' => 'Tambah User',
    ]);
});


Route::get('/petugas-masuk', [KendaraanController::class, 'testing']);


Route::get('/petugas-keluar', function () {
    return view('petugas/keluar', [
        'judul' => 'Petugas Keluar',
    ]);
});

Route::get('/petugas-ruang', function () {
    return view('petugas/ruang', [
        'judul' => 'Petugas Ruang',
    ]);
});



// CRUD
Route::get('/lihat', 'App\Http\Controllers\AdminController@lihat_user');
Route::get('/tambah', 'App\Http\Controllers\AdminController@tambah');
Route::get('user/delete/{id}', 'App\Http\Controllers\AdminController@delete')->name('delete');
Route::get('user/edit/{id}', 'App\Http\Controllers\AdminController@edit_user')->name('edit_user');
Route::get('user/update', 'App\Http\Controllers\AdminController@edit_user_aksi')->name('edit_user_aksi');
Route::get('user/add_user', 'App\Http\Controllers\AdminController@add_user')->name('add_user');

// Login
Route::post('/login', 'App\Http\Controllers\LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

// Kendaraan
Route::resource('kendaraan', KendaraanController::class);
Route::resource('laporan', LaporanController::class);

Route::get('/lihatkeluar', 'App\Http\Controllers\KendaraanController@lihatkeluar');
