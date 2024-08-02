<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::view('/','post.index')->name('home');
Route::view('/login','Auth.login')->name('view.Login');
Route::view('/register','Auth.register')->name('view.register');
Route::view('/dashboard','Auth.dashboard')->name('view.dashboard');

Route::post('/register',[AuthController::class,'register'])->name('register');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');