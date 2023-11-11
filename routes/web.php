<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/guru', function(){
    return view('guru.index');
});

Route::get('/guru/tambah', function(){
    return view('guru.tambah');
});

Route::get('/siswa', function(){
    return view('siswa.index');
});