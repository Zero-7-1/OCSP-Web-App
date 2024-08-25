<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;



// Index Page 
Route::get('/', [AppController::class, 'index'])->name('homepage');



  