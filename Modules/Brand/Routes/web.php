<?php

use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->group(function() {
    Route::resource('brand', 'BrandController');
});
