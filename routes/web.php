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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/memory', 'MemoryController@index');
Route::get('/memory/ranking', 'MemoryController@ranking');
Route::post('/memory/add', 'MemoryController@store');
Route::get('/memory/user-scores', 'MemoryController@userScores');
