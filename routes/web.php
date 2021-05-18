<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
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

Route::post('/login',[LoginController::class,'login']);

Route::get('/',[LoginController::class,'showLoginForm']);

Route::post('store', [TaskController::class, 'store']);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('home')->name('home.')->middleware('auth')->group(function(){
    Route::get('/',[TaskController::class,'showAllTask'])->name('dashboard');
    Route::post('add-data',[TaskController::class,'addAgendas'])->name('adddata');
});
