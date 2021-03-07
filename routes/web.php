<?php

use App\Http\Controllers\ReviewController;
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


Auth::routes();


Route::get('/', [ReviewController::class, 'index'])->name('index');

Route::get('/show/{id}', [ReviewController::class, 'show'])->name('show');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/review', [ReviewController::class, 'create'])->name('create');
    Route::post('/review', [ReviewController::class, 'store'])->name('store');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');