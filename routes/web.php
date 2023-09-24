<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RSVPController;
use App\Http\Controllers\WishController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/home', [MainController::class, 'index']);

// Route::get('/final', [MainController::class, 'index']);

Route::post('/rsvp', [RSVPController::class, 'store']);

Route::post('/wish', [WishController::class, 'store']);

Route::get('/admin', [RSVPController::class, 'index']);

Route::get('/test', function () {
    return view('test');
});