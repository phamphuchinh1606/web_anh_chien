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

//Route::get('/collection-all','CollectionController@index')->name('collection_all');
//Route::get('/collection/{slug?}_{id?}','CollectionController@index')->name('collection');
//Route::get('/search','CollectionController@search')->name('search');

Route::get('/collection-all','CollectionController@index')->name('collection_all');
Route::get('/collection','CollectionController@index')->name('collection');
