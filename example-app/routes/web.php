<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home; // Ensure to import the Home controller
use App\Http\Controllers\About;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Subscribe;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [HOme::class, 'index'])->name('main');
Route::get('/', [Home::class, 'index'])->name('main');
Route::get('/home', [Home::class, 'index'])->name('main');
Route::get('/about', [About::class, 'index'])->name('about');
Route::get('/contact', [Contact::class, 'index'])->name('contact');
Route::get('/subscribe', [Subscribe::class, 'index'])->name('subscribe');

