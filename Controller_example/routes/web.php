<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class,'home']);

Route::get('/home', [PageController::class,'home']);


Route::get('/about', [PageController::class,'about']);

Route::get('/contact', [PageController::class,'contact']);



Route::get('/user/{name}', [PageController::class,'user']);

Route::get('/products', [PageController::class,'products']);

Route::resource('products',ProductController::class);


