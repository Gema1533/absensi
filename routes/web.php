<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\RombelController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\KehadiranController;





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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        

Route::get('admin', function () { return view('admin'); })
	->middleware('checkRole:admin');

Route::get('pengguna', function () { return view('pengguna'); })
	->middleware(['checkRole:pengguna,admin']);

Route::resource('absens', AbsenController::class)
->middleware(['checkRole:pengguna,admin']);

Route::resource('rombels', RombelController::class)
->middleware('checkRole:admin');

Route::resource('rayons', RayonController::class)
->middleware('checkRole:admin');

Route::resource('mapels', MapelController::class)
->middleware(['checkRole:admin,pengguna']);

Route::resource('pengguna!', PenggunaController::class)
->middleware('checkRole:admin');

Route::resource('kehadiran', KehadiranController::class)
->middleware('checkRole:admin');
