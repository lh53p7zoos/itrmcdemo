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

Route::get('/', 'ModuleController@home');
Route::get('/home', 'ModuleController@home');


//Day2
Route::get('/d2', 'Controller1@d2');
Route::get('/child1', 'Controller1@child1');
Route::get('/child2', 'Controller1@child2');
Route::get('/child3', 'Controller1@child3');
Route::get('/child4', 'Controller1@child4');
Route::get('/child5', 'Controller1@child5');
Route::get('/upload', 'Controller1@upload');
Route::post('/proccess', 'Controller1@proccessupload');


//Activity 2
Route::get('/register', 'Controller1@register');
Route::get('/view', 'Controller1@view');
Route::post('/view', 'Controller1@view');

//Day3
Route::get('/d3', 'dbController@d3');
Route::get('/employees', 'dbController@employees');
Route::post('/procreg', 'dbController@proccessRegistration');
Route::get('/register2', 'dbController@register');
Route::get('/profile', 'dbController@profile');

//Fin
Route::get('/fin', 'dbController@fin');
Route::get('/doctors', 'dbController@hproviders');
