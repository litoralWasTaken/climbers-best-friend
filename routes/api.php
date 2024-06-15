<?php

use App\Http\Controllers\RouteController;
use App\Models\Route as Routes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/routes', [RouteController::class, 'index']);
