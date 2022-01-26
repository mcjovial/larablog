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

Route::get('/', 'FrontController@index')->name('home');

Route::get('about', 'FrontController@about')->name('about');
Route::get('contact', 'FrontController@contact')->name('contact');
Route::post('contact-form', 'FrontController@contact_form')->name('contact.submit');
