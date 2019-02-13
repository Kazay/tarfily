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

Route::get('/', 'PageController@index')->name('entry');
Route::get('voyage/{idVoyage?}', 'PageController@voyage');

Route::get('/about', function () {
    return view('site.about');
});

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('entry-admin');
    Route::resource('/voyage', 'VoyageController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
