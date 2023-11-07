<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\GambarController;
use App\Http\Controllers\PetaController;

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

//CLIENT SIDE
//HOMEPAGE
Route::get('/', [LandingController::class, 'index']);
Route::get('/asesmen', [LandingController::class, 'asesmen_kec']);
Route::get('/asesmen/{kecamatan}/detail', [LandingController::class, 'asesmen_detail']);
Route::get('/asesmen/sekolah/{sekolah}', [LandingController::class, 'sekolah']);
Route::get('/tentang', [LandingController::class, 'tentang']);

//LOGIN - LOGOUT
Route::get('/login', [LandingController::class, 'login'])->name('login');
Route::post('/login', [LandingController::class, 'authenticate']);
Route::post('/logout', [DashboardController::class, 'logout'])->middleware('auth');

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/dashboard/sekolah', SekolahController::class)->middleware('auth');
Route::resource('/dashboard/gambar', GambarController::class)->middleware('auth');
Route::resource('/dashboard/peta', PetaController::class)->middleware('auth');
