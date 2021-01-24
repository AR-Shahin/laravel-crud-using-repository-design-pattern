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

Route::get('/', function () {
    return view('welcome');
});

Route::name('user.')->prefix('user')->namespace('User')->group(function (){
    Route::get('index','UserController@index')->name('index');
    Route::post('store','UserController@store')->name('store');
    Route::get('view/{id}','UserController@view')->name('view');
    Route::put('update/{id}','UserController@update')->name('update');
    Route::get('delete/{id}','UserController@delete')->name('delete');
});

Route::name('student.')->prefix('student')->namespace('Student')->group(function (){
    Route::get('index','StudentController@index')->name('index');
    Route::post('store','StudentController@storeOrUpdate')->name('store');
    Route::get('view/{id}','StudentController@view')->name('view');
    Route::put('update/{id}','StudentController@storeOrUpdate')->name('update');
    Route::get('delete/{id}','StudentController@delete')->name('delete');
});