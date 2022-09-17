<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::controller(DataController::class)->group(function() {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
});
