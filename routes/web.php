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


Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/login', 'AdminController@login')->name('login');
Route::get('/logout', 'AdminController@logout')->name('logout');

Route::post('/register', 'AdminController@store')->name('register');
Route::post('/login', 'AdminController@authenticate')->name('auth');

Route::get('/', 'MainController@index')->name('home');
Route::get('/car/{carid}', 'MainController@show')->name('cardetails');
Route::get('/create', 'MainController@create')->name('addcar');

Route::post('/create', 'MainController@store');
Route::get('/edit/{carid}', 'MainController@edit')->name('editcar');
Route::post('/edit/{carid}', 'MainController@update')->name('updatecar');

Route::get('/delete/{carid}', 'MainController@destroy')->name('deletecar');



