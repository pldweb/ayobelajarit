<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;
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

// Index
Route::view('/', 'selamatdatang');


Route::view('','');
// AuthControler
Route::get('/login', [AuthController::class, 'loginView'])->name('login.auth');
Route::get('/signup', [AuthController::class, 'signupView'])->name('signup.auth');


// LandingPageController
Route::get('/dashboard', [LandingPageController::class, 'dashboardView'])->name('dashboard.view');
Route::get('/panduan-belajar', [LandingPageController::class, 'panduanView'])->name('panduan.view');
Route::get('/kelas-belajar', [LandingPageController::class, 'kelasView'])->name('kelas.view');
Route::get('/hubungi-belajar', [LandingPageController::class, 'hubungiView'])->name('hubungi.view');
Route::get('stadiums', [LandingPageController::class, 'stadiums'])->name('landing.stadiums');
