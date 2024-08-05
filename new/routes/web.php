<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PostController::class,'index'])->name('home');

Route::middleware('auth')->group(function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('view.dashboard');
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');
    Route::resource('post',PostController::class);
});


Route::middleware('guest')->group(function(){
    Route::view('/login','Auth.login')->name('view.Login');
    Route::view('/register','Auth.register')->name('view.register');

    Route::post('/register',[AuthController::class,'register'])->name('register');
    Route::post('/login',[AuthController::class,'login'])->name('login');
});