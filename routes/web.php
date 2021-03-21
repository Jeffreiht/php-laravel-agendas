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

Route::get('/', 'PageController@index')->name('home');
Route::get('agenda', 'PageController@create')->name('agenda.create');
Route::get('edit/{agenda}', 'PageController@edit')->name('agendas.edit');
Route::get('search', 'PageController@search')->name('agendas.search');
Route::post('agenda', 'PageController@store')->name('agenda.store');
Route::put('edit/{agenda}', 'PageController@update')->name('agenda.update');
Route::delete('agendas/{agenda}', 'PageController@destroy')->name('agendas.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
