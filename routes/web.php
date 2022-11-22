<?php

use App\Http\Controllers\Jumbotroncontrollers;
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

Route::get('/', 'App\Http\Controllers\Indexcontrollers@home');

Route::get('/login', 'App\Http\Controllers\Indexcontrollers@login');
Route::group(['prefix' => '/room'], function () {
    Route::get('/', 'App\Http\Controllers\Roomscontrollers@room');
    Route::get('/roomdetail', 'App\Http\Controllers\Roomscontrollers@viewroom');
    Route::get('/booking', 'App\Http\Controllers\Bookcontrollers@book');
});
Route::get('/userinfo', 'App\Http\Controllers\Usercontrollers@user');
Route::post('/userlog', 'App\Http\Controllers\Usercontrollers@login');
Route::post('/regis', 'App\Http\Controllers\Usercontrollers@register');
Route::get('/regis', 'App\Http\Controllers\Usercontrollers@register');


Route::group(['prefix' => 'secret'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', 'App\Http\Controllers\Admincontrollers@page');
        Route::group(['prefix' => 'room'], function () {
            Route::get('/', 'App\Http\Controllers\Admincontrollers@rooms');
            Route::get('/edit', 'App\Http\Controllers\Roomscontrollers@edit');
            Route::post('/create', 'App\Http\Controllers\Roomscontrollers@store');
            Route::get('/create', 'App\Http\Controllers\Roomscontrollers@store');
            Route::delete('/delete/{id}','App\Http\Controllers\Roomscontrollers@destroy');
        });
        Route::group(['prefix' => 'special'], function () {
            Route::get('/', 'App\Http\Controllers\Admincontrollers@special');
            Route::get('/edit', 'App\Http\Controllers\Specialcontroller@edit');
            Route::post('/create', 'App\Http\Controllers\Specialcontroller@store');
            Route::get('/create', 'App\Http\Controllers\Specialcontroller@store');
        });
        Route::group(['prefix' => 'jumbotron'], function () {
            Route::get('/', 'App\Http\Controllers\Admincontrollers@jumbotron');
            Route::post('/edit/{id}', 'App\Http\Controllers\Jumbotroncontrollers@edit');
            Route::get('/edit/{id}', 'App\Http\Controllers\Admincontrollers@editjumbotron');
            Route::post('/create', 'App\Http\Controllers\Jumbotroncontrollers@store');
            Route::get('/create', 'App\Http\Controllers\Jumbotroncontrollers@store');
            Route::delete('/delete/{id}','App\Http\Controllers\Jumbotroncontrollers@destroy');
        });
        Route::group(['prefix' => 'usermanage'], function () {
            Route::get('/', 'App\Http\Controllers\Admincontrollers@usermanage');
            Route::get('/edit', 'App\Http\Controllers\Usercontrollers@edit');
            Route::post('/create', 'App\Http\Controllers\Usercontrollers@create');
            Route::get('/create', 'App\Http\Controllers\Usercontrollers@create');
            Route::delete('/delete/{id}', 'App\Http\Controllers\Usercontrollers@destroy');
        });
    });

   
});
