<?php

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

Route::get('/students/', 'StudentController@index');
Route::get('/students/{id}', 'StudentController@show');

Auth::routes(['verify' => 'true']);

Route::middleware('auth') -> group(function() {
    Route::get('/students/create', 'StudentController@create');
    Route::post('/students/store', 'StudentController@store');
    Route::get('/students/{id}/edit', 'StudentController@edit');
    Route::put('/students/{id}/update', 'StudentController@update');
    Route::delete('/students/', 'StudentController@delete');
});
Route::get('/home', 'HomeController@index')->name('home');
