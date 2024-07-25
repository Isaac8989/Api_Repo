<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Apicontroller;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/suma/{num1}/{num2}', [Apicontroller::class, 'sum']);
Route::get('/mult/{num1}/{num2}', [Apicontroller::class, 'mult']);