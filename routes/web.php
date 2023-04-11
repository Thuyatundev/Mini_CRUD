<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PostController::class,'index'])->name('Post#index');
Route::post('post/create',[PostController::class,'createPost'])->name("Post#create");