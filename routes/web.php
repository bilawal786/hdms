<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Front\FrontendController@index')->name('front.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'web']], function() {

Route::get('/general/settings', 'Admin\GeneralSettingsController@index')->name('general.settings');
Route::post('/general/settings/store', 'Admin\GeneralSettingsController@store')->name('general.store');
Route::get('/general/slider', 'Admin\GeneralSettingsController@slider')->name('general.slider');
Route::post('/general/slider/store', 'Admin\GeneralSettingsController@sliderstore')->name('slider.store');
Route::get('/general/services', 'Admin\GeneralSettingsController@services')->name('general.services');
Route::post('/general/services/store', 'Admin\GeneralSettingsController@servicesstore')->name('service.store');

});
