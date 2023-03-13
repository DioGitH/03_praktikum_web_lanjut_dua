<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/pengalaman', [App\Http\Controllers\PengalamanController::class, 'pengalamanKuliah'])->name('pengalaman');
Route::get('/profile/{name}', [App\Http\Controllers\ProfileController::class, 'profil']);
Route::get('/tableDio', [App\Http\Controllers\TableDioController::class, 'index']);
Route::get('/tableDani', [App\Http\Controllers\TableDaniController::class, 'index']);


