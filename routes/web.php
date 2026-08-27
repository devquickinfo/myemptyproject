<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/', [LoginController::class,'index'])->name('login');
   
