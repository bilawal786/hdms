<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Front\FrontendController@index')->name('front.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
