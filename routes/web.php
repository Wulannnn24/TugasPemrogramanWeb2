<?php

use Illuminate\Support\Facades\Route;
use App\Http\Contollers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

Route::get('posts', [App\Http\Controllers\PostController::class, 'index']);
Route::get('posts/{id}', [App\Http\Controllers\PostController::class, 'show']);
Route::post('posts', [App\Http\Controllers\PostController::class, 'store']);
Route::put('posts/{id}', [App\Http\Controllers\PostController::class, 'update']);
Route::delete('posts/{id}', [App\Http\Controllers\PostController::class, 'destroy']);


Route::get('tentang', [PageController::class, 'about']);


Route::get('/profil', function () {
    return response()->json([
        'nama' => 'Wulandari',
        'email' => 'wulann24dari@gmail.com',
        'umur' => 20
    ]);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/redirect', function() {
    return redirect('/home');
});

Route::get('/welcome', function() {
    return view('welcome');
});

Route::get('/namasaya', function () {
    return "wulandari";
    
});


Route::get('/biodata', function () {
    return view ('biodata');
    
});

Route::get('/namasaya/{nama}', function ($nama) {
    return "Namasaya :" . $nama;
    
});

//http://laravel.test/mahasiswa/alex
Route::get('/mahasiswa/{nama}', function ($nama) {
    return "Mahasiswa :" . $nama;
    
});

//http://laravel.test/stok_barang/laptop/hp
Route::get('/stok_barang/laptop/{nama_barang}', function ($nama_barang) {
    return "Cek sisa stok untuk laptop " . $nama_barang;
    
});


//http://laravel.test/stok_barang/dispenser/miyako
Route::get('/stok_barang/dispenser/{nama_barang}', function ($nama_barang) {
    return "Cek sisa stok untuk dispenser " . $nama_barang;
    
});


Route::get('/stok_barang/dispenser/{merek?}', function ( $merek = 'miyako') {
    return "cek sisa stok untuk  $merek";
});



//http://laravel.test/stok_barang
Route::get('/stok_barang/{tipe?}/{merek?}', function ($tipe = 'smartphone', $merek = 'samsung') {
    return "cek sisa stok untuk $tipe $merek";
});


//http://laravel.test/user/
Route::get('/user/{id}', function ($id) {
    return "Tampilkan User dengan ID: $id";
})->where('id', '[0-9]+');


// http://laravel.test/user/
Route::get('/user/{id}', function ($id) {
    return "Tampilkan user dengan id = $id";
})->where('id', '^[A-Za-z]{2}[0-9]+$');
