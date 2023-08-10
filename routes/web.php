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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/superadmin', [App\Http\Controllers\SuperController::class, 'index'])->name('superAdmin');
Route::get('/profile', [App\Http\Controllers\SuperController::class, 'profile'])->name('profile');
Route::get('/editprofile', [App\Http\Controllers\SuperController::class, 'editProfile'])->name('editProfile');
Route::get('/request', [App\Http\Controllers\SuperController::class, 'request'])->name('request');
Route::get('/request', [App\Http\Controllers\SuperController::class, 'randev'])->name('ramde');
