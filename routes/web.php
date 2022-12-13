<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\IncrementdecrementController;
use App\Http\Controllers\ReviewsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    echo "Cache is cleared<br>";
    Artisan::call('route:clear');
    echo "route cache is cleared<br>";
    Artisan::call('config:clear');
    echo "config is cleared<br>";
    Artisan::call('view:clear');
    echo "view is cleared<br>";
});

Route::get('increment-decrement', [IncrementdecrementController::class, 'index'])->name('increment-decrement');
Route::get('reviews', [ReviewsController::class, 'index'])->name('reviews');
