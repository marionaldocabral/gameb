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

Route::get('/', '\App\Http\Controllers\QuestionController@welcome');

Route::get('/home', function () {
    return view('home');
});

Route::group(['middleware'=> 'web'],function(){
	Route::post('home','\App\Http\Controllers\QuestionController@home');
	Route::get('question/reset','\App\Http\Controllers\QuestionController@reset');
	Route::get('home/winner','\App\Http\Controllers\QuestionController@winner');
	Route::get('question/{nivel}/lottery/{tema}','\App\Http\Controllers\QuestionController@lottery');
  	Route::resource('question','\App\Http\Controllers\QuestionController');
});

Route::resource('tema','\App\Http\Controllers\TemaController');
