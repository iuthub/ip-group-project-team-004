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



Route::get('login','loginController@index');
Route::get('/', 'MainController@index');
Route::get('register','LoginController@register');
Route::get('survey', 'SurveyController@index');
Route::get('{survey}', 'SurveyController@getById');

Route::get('pass', 'PassController@index');
Route::get('construct', 'SurveyController@create');
Route::get('account', 'MainController@acc');
Route::get('statistics', 'TestController@index');

Route::post('survey/set', 'SurveyController@set');