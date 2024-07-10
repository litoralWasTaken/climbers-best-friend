<?php

use App\Http\Controllers\RouteController;
use App\Http\Controllers\RoutePostController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/routes', [RouteController::class, 'index']);
Route::get('/routes/{index}', [RouteController::class, 'show']);

Route::get('/posts', [RoutePostController::class, 'index']);
Route::get('/posts/followed/{id}', [RoutePostController::class, 'followed']);
Route::get('/posts/{index}', [RoutePostController::class, 'show']);

// Route::post('/posts/upload', [RoutePostController::class, 'store'])->middleware('auth:sanctum');

Route::middleware('web')->post('/posts/upload', [RoutePostController::class, 'store']);
Route::middleware('web')->post('/posts/delete', [RoutePostController::class, 'delete']);

Route::middleware('web')->post('/user/follow', [UserController::class, 'follow']);
Route::middleware('web')->post('/user/unfollow', [UserController::class, 'unfollow']);
