<?php

use App\Http\Controllers\Visitor\ContactFormController;
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
    return view('visitor.home');
})->name('home');

Route::get('services', function () {
    return view('visitor.services');
})->name('services');

Route::get('products', function () {
    return view('visitor.products');
})->name('products');

Route::get('about', function () {
    return view('visitor.about');
})->name('about');

// contact form routes
Route::get('contact', [ContactFormController::class, 'create'])->name('contact.create');
Route::post('contact', [ContactFormController::class, 'store'])->name('contact.store');


// Admin
Route::prefix('admin')
    ->middleware('auth')
    ->group(function () {
        Route::view('dashboard', 'admin.dashboard');
});
