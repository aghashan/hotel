<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JombrotonController;
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
});
Route::get('/userinfo', 'App\Http\Controllers\Usercontrollers@user');
Route::post('/userlog', 'App\Http\Controllers\Usercontrollers@login');
Route::post('/regis', 'App\Http\Controllers\Usercontrollers@register');
Route::get('/regis', 'App\Http\Controllers\Usercontrollers@register');
Route::get('/booking','App\Http\Controllers\Bookcontrollers@book');


Route::group(['prefix' => 'secret'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', 'App\Http\Controllers\Admincontrollers@page');
        Route::group(['prefix' => 'room'], function () {
            Route::get('/', 'App\Http\Controllers\Admincontrollers@rooms');
            Route::get('/edit', 'App\Http\Controllers\Roomscontrollers@edit');
            Route::get('/add','App\Http\Controllers\Roomscontrollers@create');
        });
        Route::group(['prefix' => 'special'], function () {
            Route::get('/', 'App\Http\Controllers\Admincontrollers@special');
            Route::get('/edit', 'App\Http\Controllers\Specialcontroller@edit');
            Route::get('/create', 'App\Http\Controllers\Specialcontroller@create');
        });
        Route::group(['prefix' => 'jumbotron'], function () {
            Route::get('/', 'App\Http\Controllers\Admincontrollers@jumbotron');
            Route::get('/edit', 'App\Http\Controllers\Jumbotroncontrollers@edit');
            Route::get('/create', 'App\Http\Controllers\Jumbotroncontrollers@create');
            // Route::get('/uploads', 'Jumbotroncontrollers@upload')->name('uploads');
            Route::post('/save', 'App\Http\Controllers\Jumbotroncontrollers@store')->name('image');
        });
        Route::group(['prefix'=>'usermanage'],function(){
            Route::get('/', 'App\Http\Controllers\Admincontrollers@usermanage');
            Route::get('/edit', 'App\Http\Controllers\Usercontrollers@edit');
            Route::get('/create', 'App\Http\Controllers\Usercontrollers@create');
            
        });
    });
});

Route::resource('admin/jumbotron', JombrotonController::class);
