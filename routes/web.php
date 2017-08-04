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

Route::get('/', 'HomeController@index');
Route::get('/type/{type}/category', 'HomeController@getCategory');
Route::get('/category/{category}/symptoms', 'HomeController@getSymptoms');
Route::get('/symptoms/problems', 'HomeController@getProblems');
Route::get('/problems/{problem}/solution', 'HomeController@getSolutions');
