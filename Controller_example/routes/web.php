<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use function PHPUnit\Framework\returnValueMap;


Route::get('/', [PageController::class, 'home']);

Route::get('/home', [PageController::class, 'home']);


Route::get('/about', [PageController::class, 'about']);

Route::get('/contact', [PageController::class, 'contact']);



Route::get('/user/{name}', [PageController::class, 'user']);

Route::get('/product', [PageController::class, 'product']);

Route::resource('products', ProductController::class);

Route::get('/products/{name}', [PageController::class, 'productDetails']);


Route::prefix('admin')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/reports', [AdminController::class, 'reports'])->name('admin.reports');

});
Route::get('/contact_form', function () {

    return view('Contact_form');
});

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/contact/result', function () {

    return view('contact');



})->name('contact.result');


Route::resource('feedback', FeedbackController::class);





Route::get('/feedback/create', action: [FeedbackController::class, 'create'])->name('feedback.create');

Route::post('/feedback/store', [FeedbackController::class, 'store'])->name('feedback.store');



Route::get('/feedback', function () {

    return view('feedback/index');



})->name('feedback.index');
