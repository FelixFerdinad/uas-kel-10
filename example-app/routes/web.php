<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home; // Ensure to import the Home controller

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HOme::class, 'index'])->name('main');
