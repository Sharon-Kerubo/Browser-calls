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
//Website
Route::get('/', 'WebsiteController@index')->name('website.home');
Route::get('/maps', 'WebsiteController@maps')->name('website.maps');
Route::get('/hospitals', 'WebsiteController@hospitals')->name('website.hospitals');
Route::get('/doctors', 'WebsiteController@doctors')->name('website.doctors');
Route::get('/contact', 'WebsiteController@contact')->name('website.contact');

//Authentication
Auth::routes(['verify'=>true]);
Route::get('/personnel-register', 'PersonnelRegisterController@showRegistrationForm')->name('backend.register.personnel');
Route::post('/p-register', 'PersonnelRegisterController@register')->name('backend.register');

//Backend
Route::get('/home', 'WebsiteController@index')->name('website.home')->middleware('verified');;
Route::get('/dashboard', 'BackendController@dashboard')->name('backend.dashboard')->middleware('verified');
// Doctors
Route::get('/manage_doctors', 'BackendController@manage_doctors')->name('backend.manage.doctors')->middleware('verified');
Route::post('/verify_doctor', 'BackendController@verify_doctor')->name('backend.verify.doctor')->middleware('verified');
//Facilities
Route::post('/add_facilities','BackendController@add_facilities')->name('add.facilities')->middleware('verified');
Route::get('/get_facilities','BackendController@get_facilities')->name('backend.get.facilities')->middleware('verified');
//Services
Route::get('/get_services','BackendController@get_services')->name('backend.get.services')->middleware('verified');
Route::post('/add_services','BackendController@add_services')->name('add.services')->middleware('verified');
//Hospitals
Route::post('/migrate_hospitals','BackendController@migrate_hospitals')->name('backend.migrate.hospitals')->middleware('verified');
Route::get('/manage_hospitals','BackendController@manage_hospitals')->name('backend.manage.hospitals')->middleware('verified');
Route::get('/get_doctors_json','BackendController@get_doctors_json')->name('backend.get.doctors')->middleware('verified');
