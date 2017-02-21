<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
// Route::get('*', function() {
//     return view('index');
// });
Route::get('/', 'AngularController@serveApp');

Route::get('/unsupported-browser', 'AngularController@unsupported');

Route::get('home', 'StageController@home');
Route::get('quiz/{stage}/{mapel}/{type}', 'QuizzController@index');
Route::get('quiz/show/{id}', 'QuizzController@show');