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

Route::resource('manuscripts', 'ManuscriptController');

// Manuscript viewer route
Route::get('/manuscripts/{manuscript}/viewer', 'ManuscriptController@viewer')->name('manuscripts.viewer');
Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/bigpurrs', 'ManuscriptController@bigpurrs')->name('big_purrs');