<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function() {
    return view('welcome');
});

Route::get(
    '/motehingars', 
    'App\Http\Controllers\MVCcontroller@index'
)->middleware('auth');

Route::post(
    '/motehingars',
    'App\Http\Controllers\MVCcontroller@store'
);

Route::get(
    '/motehingars/create',
    'App\Http\Controllers\MVCcontroller@create'
);

Route::get(
    '/motehingars/{id}', 
    'App\Http\Controllers\MVCcontroller@show'
)->middleware('auth');

Route::delete(
    '/motehingars/{id}',
    'App\Http\Controllers\MVCcontroller@destroy'
)->middleware('auth');


Auth::routes([
    'register'=>false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
