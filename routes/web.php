<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/', 'App\Http\Controllers\CustomerController@index');
    Route::resource('car', 'App\Http\Controllers\CarController');
    Route::resource('carModel', 'App\Http\Controllers\CarModelController');
    Route::resource('customers', 'App\Http\Controllers\CustomerController');
    Route::get('customers/{id}/travel', 'App\Http\Controllers\CustomerController@travel')->name('customers.travel');
    Route::get('/customer/pdf','App\Http\Controllers\CustomerController@createPDF');
});


Auth::routes(['register' => false]);

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
