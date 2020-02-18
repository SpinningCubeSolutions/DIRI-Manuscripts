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


Route::get('/about', function() {
    return view('about');
});

Route::get('/privacypolicy', function() {
	return view('privacypolicy');
});

Route::get('/google-drive', function() {
    return view('manuscripts.images');
})->name('google-drive');

// Manuscript viewer route
Route::get('/manuscripts/{manuscript}/viewer', 'ManuscriptController@viewer')->name('manuscripts.viewer');

// Search routes                                        
Route::get('/manuscripts/search', 'ManuscriptController@showSearchForm')->name('manuscripts.showSearchForm');
Route::post('/manuscripts/search', 'ManuscriptController@search')->name('manuscripts.search');
Route::post('/manuscripts/search_one', 'ManuscriptController@searchOne')->name('manuscripts.searchOne');
Route::post('/manuscripts/dd', 'ManuscriptController@dumpAndDie')->name('dumpAndDie');
// Manuscript resource controller routes
Route::resource('manuscripts', 'ManuscriptController');

// Authentication
Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/home', 'HomeController@index')->name('home');

