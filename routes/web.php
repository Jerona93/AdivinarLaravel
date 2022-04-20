<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/adivina', 'App\Http\Controllers\AdivinaController@index');

// Route::get('/adivina', 'App\Http\Controllers\ResultController@result');
Route::post('adivina', 'App\Http\Controllers\ResultController@result');

Route::view('result', 'App\Http\Controllers\ResultController@result');
