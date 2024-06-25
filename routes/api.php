<?php

use App\Http\Controllers\RouteController;
use App\Http\Controllers\RoutePostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/routes', [RouteController::class, 'index']);
Route::get('/routes/{index}', [RouteController::class, 'show']);

Route::get('/posts', [RoutePostController::class, 'index']);
Route::get('/posts/{index}', [RoutePostController::class, 'show']);
