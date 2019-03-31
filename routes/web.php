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

Route::get('/home', function () {
    return view('home');
});

Route::group(['middleware'=> 'web'],function(){
	Route::get('home/child','\App\Http\Controllers\QuestionController@home_child');
	Route::get('home/adult','\App\Http\Controllers\QuestionController@home_adult');
	Route::post('question/lottery','\App\Http\Controllers\QuestionController@answer');
	Route::get('question/lottery','\App\Http\Controllers\QuestionController@lottery');
  	Route::resource('question','\App\Http\Controllers\QuestionController');
});
