<?php

use App\Http\Controllers\PostController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('Post#index'); //home page
Route::post('post/create', [PostController::class, 'createPost'])->name("Post#create"); // create => C
Route::get('post/view/{id}', [PostController::class, 'viewPost'])->name('Post#view'); //read => R
Route::get('post/update/{id}', [PostController::class, 'UpdatePost'])->name('Post#update'); //update 
Route::post('post/updated', [PostController::class, 'UpdatedPost'])->name('Updated#post'); //updated => U
Route::get('post/delete/{id}', [PostController::class, 'deletePost'])->name('Post#delete'); //delete => D
