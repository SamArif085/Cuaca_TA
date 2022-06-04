<?php

use App\Http\Controllers\KotaController;
use App\Http\Controllers\LoginControler;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\RegistrasiControler;
use Illuminate\Support\Facades\Route;

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
    return view('login.index');
});
Route::get('/register', function () {
    return view('register.index');
});

//login
Route::get('/login', [LoginControler::class, 'login'])->name('login');
Route::post('/login', [LoginControler::class, 'authenticate']);
Route::post('/logout', [LoginControler::class, 'logout']);

//registrasi
Route::get('/register', [RegistrasiControler::class, 'index']);
Route::post('/register', [RegistrasiControler::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard', [ProvinsiController::class, 'index'])->middleware('auth');
route::get('/getkota', [KotaController::class, 'getkota']);