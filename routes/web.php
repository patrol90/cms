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



Auth::routes();

Route::resource('/', 'ContentController');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/{id}', 'ContentController@show');

    Route::patch('/update/{id}', 'ContentController@update');
    Route::get('/{id}/edit', 'ContentController@edit');
});

//Route::get('/{id}', 'ContentController@show');
//Route::get('/{id}/edit', 'ContentController@edit');






