<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/days', [ExcerciseAPIController::class, 'getDays']);

Route::get('/excersice', [ExcerciseAPIController::class, 'getData']);

Route::get('/excersices/{id}', [ExcerciseAPIController::class, 'getExcersiceData']);

Route::get('/wallpaper/{id}', [WallpaperAPIController::class, 'getData']);

Route::get('/yoga/{id}', [YogaAPIController::class, 'getData']);