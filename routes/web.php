<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('top', [PostsController::class, 'index']);
    Route::post('posts', [PostsController::class, 'store']);
    Route::put('posts', [PostsController::class, 'update']);
    Route::delete('posts/{post}', [PostsController::class, 'destroy']);

    Route::get('profile', [ProfileController::class, 'profile']);
    Route::put('profile', [ProfileController::class, 'update']);

    Route::get('search', [UsersController::class, 'search']);
    Route::post('follow/{user}', [UsersController::class, 'follow']);
    Route::delete('follow/{user}', [UsersController::class, 'unfollow']);

    Route::get('users/{user}', [UsersController::class, 'show']);

    Route::get('follow-list', [PostsController::class, 'followList']);
    Route::get('follower-list', [PostsController::class, 'followerList']);
});
