<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KelasController;

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

Route::get('/', function () {
    return view('welcome');
});

#Route Value
Route::get('/hello', function () {
    return ("Hello World!");
});

//Route Parameter
Route::get('/pegawai/{nama}/{divisi}', function ($nama,$divisi) {
    return 'Nama Pegawai : '.$nama.'<br/>Departemen : '.$divisi;
});

//Route Redirect Views
Route::get('/kabar', function () {
    return view('p3.kondisi');
});

//Route UserController
Route::get('/user', [UserController::class, 'index']);

//Route SantriController
Route::get('/santri', [SantriController::class, 'dataSantri']);

// Route ProfilController
Route::get('/profil', [ProfilController::class, 'index']);

// Route MahasiswaController
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// Route KelasController
Route::get('/kelas', [KelasController::class, 'index']);