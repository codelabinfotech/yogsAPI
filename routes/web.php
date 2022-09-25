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

Route::get('/', function () {
    return view('login');
});
Route::post('/login', [LoginController::class, 'login'])->name('login.post');


// Days/Excersice
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
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

// Wallpaper

    Route::get('/wallpaper', [WallpaperController::class, 'index'])->name('wallpaper.index');
    Route::get('/wallpaper-create', [WallpaperController::class, 'create'])->name('wallpaper.create');
    Route::post('/wallpaper-store', [WallpaperController::class, 'store'])->name('wallpaper.store');
    Route::get('/wallpaper-edit/{id}', [WallpaperController::class, 'edit'])->name('wallpaper.edit');
    Route::post('/wallpaper-update/{id}', [WallpaperController::class, 'update'])->name('wallpaper.update');
    Route::get('/wallpaper-delete/{id}', [WallpaperController::class, 'delete'])->name('wallpaper.delete');

// Yoga

    Route::get('/yoga', [YogaController::class, 'index'])->name('yoga.index');
    Route::get('/yoga-create', [YogaController::class, 'create'])->name('yoga.create');
    Route::post('/yoga-store', [YogaController::class, 'store'])->name('yoga.store');
    Route::get('/yoga-edit/{id}', [YogaController::class, 'edit'])->name('yoga.edit');
    Route::post('/yoga-update/{id}', [YogaController::class, 'update'])->name('yoga.update');
    Route::get('/yoga-delete/{id}', [YogaController::class, 'delete'])->name('yoga.delete');