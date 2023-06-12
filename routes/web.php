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

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('admin');

//Show Contact
Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');

//Show Marketplace
Route::get('/home', [ListingController::class, 'home'])->name('home');

//Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show About
Route::get('/about', function(){
    return view('about');
});

//Show Create Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// All Listings
Route::get('/', [ListingController::class, 'index']);
