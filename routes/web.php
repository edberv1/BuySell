<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;


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

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('admin');

//Listing Edit
Route::get('/listings/{listing}/edition', 'App\Http\Controllers\ListingController@edition')->name('listings.edition');
Route::put('/listings/{listing}', 'App\Http\Controllers\ListingController@updation')->name('listings.updation');

//Admin Delete Listing
Route::delete('/listings/{listing}', 'App\Http\Controllers\DashboardController@destroy')->name('listings.destroy');

//Admin Delete User
Route::delete('/users/{user}', 'App\Http\Controllers\DashboardController@userDestroy')->name('users.destroy');

//Delete Contact
Route::delete('/contact-us/{id}', 'App\Http\Controllers\DashboardController@delete')->name('deleteContact');

//Create a new user AdminDashboard
Route::post('/users', 'App\Http\Controllers\UserController@creating')->name('users.creating');
Route::get('/users', 'App\Http\Controllers\UserController@index')->name('users.index');

//New Listing
Route::post('/listings', [ListingController::class, 'storing'])->name('listings.storing');

//Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');



// All Listings
Route::get('/', [ListingController::class, 'index']);

//Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

//Show Create Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

//User Edit
Route::get('/users/{user}/edit', 'App\Http\Controllers\UserController@edit')->name('users.edit');
Route::put('/users/{user}', 'App\Http\Controllers\UserController@update')->name('users.update');

//Store Listing
// Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');
//Update Listing
// Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//Manage Listings
Route::get('listings/manage', [ListingController::class, 'manage'])->middleware('auth');

//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Show Register Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Show About
Route::get('/about', function(){ return view('about');});

//Show Contact
Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');

//Show Marketplace
Route::get('/home', [ListingController::class, 'home'])->name('home');

//Create New User
Route::post('/user', [UserController::class, 'store']);

//Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
