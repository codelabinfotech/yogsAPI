<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category-create', [CategoryController::class, 'create'])->name('category.create');
Route::get('/category-edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category-store', [CategoryController::class, 'store'])->name('category.store');
Route::post('/category-update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/category-delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');


Route::get('/excercise', [ExcerciseController::class, 'index'])->name('exercise.index');
Route::get('/excercise-create', [ExcerciseController::class, 'create'])->name('excercise.create');
Route::get('/excercise-edit/{id}', [ExcerciseController::class, 'edit'])->name('excercise.edit');
Route::post('/excercise-store', [ExcerciseController::class, 'store'])->name('excercise.store');
Route::post('/excercise-update/{id}', [ExcerciseController::class, 'update'])->name('excercise.update');
Route::get('/excercise-delete/{id}', [ExcerciseController::class, 'delete'])->name('excercise.delete');