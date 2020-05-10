<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MainController@index');
Route::get('statistics', 'TestController@index');
Route::get('login','loginController@index');
Route::get('register','LoginController@register');
Route::get('survey', 'SurveyController@index');
Route::get('pass', 'PassController@index');
Route::get('construct', 'SurveyController@create');

