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
use App\Http\Controllers;

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::post('calc', 'App\Http\Controllers\HomeController@calcNumber');

Route::any('{url}', function () {return redirect('/');})->where('url', '.*');
