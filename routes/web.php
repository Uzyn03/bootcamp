<?php

use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth as FacadesAuth;

Route::get('/', function () {
    return view('welcome');
});

FacadesAuth::routes();

Route::get('/users', [UserController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
