<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjemploController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/index', [EjemploController::class, 'index']);
// Route::get('/users/{id}', [EjemploController::class, 'getUser']);

Route::resources([
    'users' => UserController::class,
    'categories' => CategoryController::class
]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
