<?php

use App\Http\Controllers\user;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentification;

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
Route::get('/',function(){
    return view('home');
});
Route::post('/inscription',[User::class,'inscription']);
Route::post('/connection',[User::class,'connection']);

Route::controller(Authentification::class)->group(function () {
    Route::middleware('guest')->group(function () {

        Route::get('/login', 'afficher_login')->name('afficher_login');

    });
    Route::middleware('auth')->group(function () {

        Route::get('/logout', 'logout')->name('logout');
    });
});
