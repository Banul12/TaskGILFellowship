<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilesController;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

Route::get('/',[DashboardController::class,'show_post'])->name('dashboard');

Route::middleware(['auth'])->group(function(){
    Route::get('/post', [PostController::class, 'index'])->name
    ('post_index');
    Route::post('/post', [PostController::class, 'create'])->name
    ('post_create');
    
    Route::get('/dashboard', [DashboardController::class, 'show_post'])->name('dashboard');
    
    Route::get('/profiles', [ProfilesController::class, 'list'])->name('profiles');

});


require __DIR__.'/auth.php';
