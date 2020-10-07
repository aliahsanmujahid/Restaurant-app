<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodController;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('category',CategoryController::class);


Auth::routes(['register'=>true]);


Route::resource('food',FoodController::class);

Route::get('/',[App\Http\Controllers\FoodController::class, 'listFood']);

Route::get('/foods/{id}',[App\Http\Controllers\FoodController::class, 'view'])->name('food.view');