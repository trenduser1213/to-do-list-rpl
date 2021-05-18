<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('AllTask.AllTask');
});

Route::prefix('register')->group(function() {
    Route::get('/', [RegisterController::class, 'index']);
    Route::post('/create', [RegisterController::class, 'registerVerification']);
    
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/login-triandi', function(){
    return view('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
