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

Route::get('/person', 'PersonController@index');

Route::get('/person/show/{param}', 'PersonController@show');

Route::get('/person/send-data', 'PersonController@sendData');

Route::get('/student', 'StudentController@index');

Route::get('/student/my-academic/{course}/{task}/{quiz}/{mid_term}/{final}', 'StudentController@myCourse');


Route::get('/homepage', function () {
    return view('home', ["name" => "Iksan Jaya Sebastian"]);
});