<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Front\FrontendController@index')->name('front.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'web']], function() {

Route::get('/general/settings', 'Admin\GeneralSettingsController@index')->name('general.settings');
Route::post('/general/settings/store', 'Admin\GeneralSettingsController@store')->name('general.store');

});
