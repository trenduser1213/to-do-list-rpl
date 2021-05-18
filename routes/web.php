<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TaskController;

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

Auth::routes();

Route::prefix('register')->group(function() {
    Route::post('/create', [RegisterController::class, 'registerVerification']);
});

Route::get('/', [TaskController::class, 'index'])->middleware('auth');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
