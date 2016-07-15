<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::auth();
// -- Home Page --
Route::get('/', 'HomeController@index');
Route::post('institution/addNew', 'InstitutionController@addNew');
Route::get('institution/{institution}/sars', 'SarController@index');
Route::group(['prefix' => 'institution/{institution}/sar'], function(){
    Route::get('{sar}/show', 'SarController@show');
    Route::get('insert', 'SarController@insert');
    Route::get('{sar}/update', 'SarController@update');
    Route::post('addSar', 'SarController@addSar');
});
Route::get('/check', 'SarController@check');