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

Route::get('main', function () {
    return view('main');
});
Route::get('register', function () {
    return view('register');
});
Route::get('login', function () {
    return view('login');
});
Route::get('survey', function () {
    return view('surveyCreate');
});
Route::get('problem/', function () {
    return view('createProblem');
});
Route::get('problemset/', function () {
    return view('problemSet');
});
Route::get('test', function () {
    return view('createTest');
});
Route::get('testset', function () {
    return view('testSet');
});
Route::get('construct', function () {
    return view('construct');
});
Route::get('account', function () {
    return view('showAcc');
});
Route::get('settings', function () {
    return view('settings');
});
Route::get('check', function () {
    return view('check');
});
Route::get('preview', function () {
    return view('preview');
});
Route::get('edit', function () {
    return view('edit');
});
Route::get('statistics', function () {
    return view('statistics');
});

