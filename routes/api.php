<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;




Route::apiResource('posts', PostController::class);
Route::apiResource('posts.comments', CommentController::class);
