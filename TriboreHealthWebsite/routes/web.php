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
Route::get('/', 'WebsiteController@index')->name('website.home');
Route::get('/maps', 'WebsiteController@maps')->name('website.maps');
Route::get('/hospitals', 'WebsiteController@hospitals')->name('website.hospitals');
Route::get('/doctors', 'WebsiteController@doctors')->name('website.doctors');
Route::get('/contact', 'WebsiteController@contact')->name('website.contact');



Auth::routes();

Route::get('/home', 'WebsiteController@index')->name('website.home');
