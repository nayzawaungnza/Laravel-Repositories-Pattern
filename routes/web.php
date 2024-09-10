<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', [\App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('post.index');

Route::get('/post/{id}', [\App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
Route::delete('/post/{id}', [\App\Http\Controllers\PostController::class, 'delete'])->name('post.delete');

Route::put('/post/{id}', [\App\Http\Controllers\PostController::class, 'update'])->name('post.update');

Route::get('/posts/{user_id}', [\App\Http\Controllers\PostController::class, 'getAllPostWithUser'])->name('post.getAllPostWithUser');
Route::get('/post/{post_id}/{user_id}', [\App\Http\Controllers\PostController::class, 'getSinglePostWithUser'])->name('post.getSinglePostWithUser');