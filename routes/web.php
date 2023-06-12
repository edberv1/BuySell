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

Route::post('/listings', [ListingController::class, 'storing'])->name('listings.storing');
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');
//Show Marketplace
Route::get('/home', [ListingController::class, 'home'])->name('home');

Route::get('/listings/{listing}/edition', 'App\Http\Controllers\ListingController@edition')->name('listings.edition');
Route::put('/listings/{listing}', 'App\Http\Controllers\ListingController@updation')->name('listings.updation');

//Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/users/{user}/edit', 'App\Http\Controllers\UserController@edit')->name('users.edit');
Route::put('/users/{user}', 'App\Http\Controllers\UserController@update')->name('users.update');
//Show About
Route::get('/about', function(){
    return view('about');
});

//Show Create Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// All Listings
Route::get('/', [ListingController::class, 'index']);
