<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontController::class, 'index'])->name('home');

require __DIR__.'/auth.php';

// Catch all page controller (place at the very bottom)
Route::get('{slug}', [FrontController::class, 'page'])->where('slug', '([A-Za-z0-9\-\/]+)');
