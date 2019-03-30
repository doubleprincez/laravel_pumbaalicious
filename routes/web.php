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

Route::get('/', 'PagesController@index');

Route::get('/contact','PagesController@contact')->name('contact');

Route::get('/hot','PagesController@hot')->name('hot');

Route::resource('shop','CategoriesController');

Route::resource('product','ProductsController');

Route::get('/search','PagesController@search')->name('search');

Route::get('/help','PagesController@help')->name('help');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
