<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Antrian;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TanggalMerahCotroller;
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

Route::get('/home', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');

    Route::get('/', [AntrianController::class, 'index'])->name('home');
    Route::post('/', [AntrianController::class, 'save'])->name('home');

    Route::get('/nomer', function () {
        return view('nomer');
    });
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/tanggal_merah', [TanggalMerahCotroller::class, 'index'])->name('tanggal_merah');
    Route::get('/tanggal_merah/add', [TanggalMerahCotroller::class, 'form'])->name('tanggal_merah.add');
    Route::post('/tanggal_merah/add', [TanggalMerahCotroller::class, 'save'])->name('tanggal_merah.add');

    Route::get('/tanggal_merah/edit/{id}', [TanggalMerahCotroller::class, 'edit'])->name('tanggal_merah.edit');
    Route::post('/tanggal_merah/edit/{id}', [TanggalMerahCotroller::class, 'update'])->name('tanggal_merah.edit');

    Route::get('/tanggal_merah/delete/{id}', [TanggalMerahCotroller::class, 'delete'])->name('tanggal_merah.delete');

    Route::get('/antrian', [AntrianController::class, 'index2'])->name('antrian');


    Route::get('/status/{id}', [AdminController::class, 'status'])->name('status');
});


// Route::get('/', function () {
//     return view('welcome');
// });
