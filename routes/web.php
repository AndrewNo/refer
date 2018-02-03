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

Route::get('/','ClickController@index');

Route::get('/click', 'ClickController@click')->name('click');
Route::get('succes/{id_click}', 'ClickController@succes')->name('succes');
Route::get('error/{id_click}', 'ClickController@error')->name('error');
Route::post('/sort', 'ClickController@sort')->name('sort');
Route::get('bad_domain', 'BadDomainController@index')->name('bad_domain');
Route::post('add_domain', 'BadDomainController@addDomain')->name('add_domain');