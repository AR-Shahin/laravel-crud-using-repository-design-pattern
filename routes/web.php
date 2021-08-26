<?php


use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

// Route::name('user.')->prefix('user')->namespace('User')->group(function () {
//     Route::get('index', 'UserController@index')->name('index');
//     Route::post('store', 'UserController@store')->name('store');
//     Route::get('view/{id}', 'UserController@view')->name('view');
//     Route::put('update/{id}', 'UserController@update')->name('update');
//     Route::get('delete/{id}', 'UserController@delete')->name('delete');
// });

// Route::name('student.')->prefix('student')->namespace('Student')->group(function () {
//     Route::get('index', 'StudentController@index')->name('index');
//     Route::post('store', 'StudentController@storeOrUpdate')->name('store');
//     Route::get('view/{id}', 'StudentController@view')->name('view');
//     Route::put('update/{id}', 'StudentController@storeOrUpdate')->name('update');
//     Route::get('delete/{id}', 'StudentController@delete')->name('delete');
//     Route::get('restore/{id}', 'StudentController@restoreData')->name('restore');
//     Route::get('pdelete/{id}', 'StudentController@permanentDelete')->name('permanent.delete');
// });


# Category
Route::resource('category', CategoryController::class);
Route::get('get-all-cat', [CategoryController::class, 'getAllCat'])->name('get-all-cat');
Route::get('test', function () {
    return  $response = Http::get('http://127.0.0.1:8001/api/category');
});
