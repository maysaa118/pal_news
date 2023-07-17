<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SearchController;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/',[AdminController::class, 'index'])->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('posts', PostController::class);
    
});


   Route::get('/', function () {
    return view('layouts/front');
     });
     

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*
Route::get('/posts/{id}', [PostsController::class, 'show'])
    ->name('layouts.posts.show');
    Route::get('search', [SearchController::class, 'index'])
    ->name('search');
    Route::get('/', [HomesController::class, 'index'])
    ->name('layouts.posts.home');

*/

    Route::get('/', [HomesController::class, 'index'])
    ->name('home');

Route::get('/posts/{post}', [PostsController::class, 'show'])
    ->name('posts.show');

Route::get('search', [SearchController::class, 'index'])
    ->name('search');