<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Show About
Route::get('/about', function(){
    return view('about');
});

//Show Contact
Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');

//Show Marketplace
Route::get('/home', [ListingController::class, 'home'])->name('home');

//Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');