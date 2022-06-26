<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;

Route::controller(PostController::class)->group(function() {

    Route::prefix('/{user_id}')->group(function($userId) {

        Route::prefix('/posts')->group(function($userId) {

            Route::get('/{id}', 'getPost');

            Route::get('/', 'show')->name('main');
        });
    });

    Route::prefix('/posts')->group(function() {
        Route::get('/add', 'add')->middleware('auth');

        Route::post('/add', 'store')->middleware('auth');
    });
});

Route::controller(LoginController::class)->group(function() {
    Route::post('/register', 'register');
    
    Route::post('/login', 'login');
    
    Route::get('/logout', 'logout');
});

Route::get('/', function() {
    return view('main');
})->name('login');
