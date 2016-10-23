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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'AssignmentController@index');


// we will ad new route into middleware group

/*Route::group(['middleware' => ['web']], function() {
  Route::resource('blog','BlogController');  
});*/


Route::group(['middleware' => ['web']], function() {
  Route::resource('assignment','AssignmentController');  
});




