<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PostController::class,'index'])->name('Post#index'); //home page
Route::post('post/create',[PostController::class,'createPost'])->name("Post#create"); // create
Route::get('post/delete/{id}',[PostController::class,'deletePost'])->name('Post#delete');
