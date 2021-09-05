<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Front\FrontendController@index')->name('front.index');
Route::post('front/query', 'Front\FrontendController@query')->name('front.query');
Route::get('user/login', 'Front\FrontendController@userLogin')->name('user.login');
Route::get('/payment/{link}', 'Front\FrontendController@paymentLink')->name('front.payment');
Route::get('/payment/success/{id}', 'Front\FrontendController@paymentSuccess')->name('payment.success');

Auth::routes();


Route::group(['middleware' => ['auth', 'web', 'role']], function() {

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/general/settings', 'Admin\GeneralSettingsController@index')->name('general.settings');
Route::post('/general/settings/store', 'Admin\GeneralSettingsController@store')->name('general.store');
Route::get('/general/slider', 'Admin\GeneralSettingsController@slider')->name('general.slider');
Route::post('/general/slider/store', 'Admin\GeneralSettingsController@sliderstore')->name('slider.store');
Route::get('/general/services', 'Admin\GeneralSettingsController@services')->name('general.services');
Route::post('/general/services/store', 'Admin\GeneralSettingsController@servicesstore')->name('service.store');
Route::get('/general/content', 'Admin\GeneralSettingsController@content')->name('general.content');
Route::post('/general/content/store', 'Admin\GeneralSettingsController@contentstore')->name('content.store');
Route::get('/offers/index', 'Admin\GeneralSettingsController@offers')->name('offers.index');
Route::post('/offers/store', 'Admin\GeneralSettingsController@offersstore')->name('offers.store');

Route::get('/temoignage/index', 'Admin\TestimonialController@index')->name('testimonial.index');
Route::post('/temoignage/store', 'Admin\TestimonialController@store')->name('testimonial.store');
Route::get('/temoignage/delete/{id}', 'Admin\TestimonialController@delete')->name('testimonial.delete');

Route::get('/queries/index', 'Admin\QueriesController@index')->name('queries.index');
Route::get('/queries/view/{id}', 'Admin\QueriesController@view')->name('queries.view');
Route::get('/queries/status/{id}/{status}', 'Admin\QueriesController@status')->name('query.status');
Route::post('/queries/update/{id}', 'Admin\QueriesController@update')->name('query.update');
Route::get('/queries/processing', 'Admin\QueriesController@processing')->name('queries.processing');
Route::get('/queries/complete', 'Admin\QueriesController@complete')->name('queries.complete');
Route::post('/payment/link/store', 'Admin\QueriesController@paymentLink')->name('payment.store');

Route::post('/customer/store', 'Admin\QueriesController@customerStore')->name('customer.store');
Route::get('customers/index', 'Admin\CustomerController@index')->name('customers.index');
Route::get('customers/orders/{id}', 'Admin\CustomerController@orders')->name('customer.orders');
Route::get('customers/edit/{id}', 'Admin\CustomerController@edit')->name('customer.edit');
Route::post('customers/update/{id}', 'Admin\CustomerController@update')->name('customer.update');
Route::get('customers/payments', 'Admin\CustomerController@payments')->name('customers.payments');


Route::get('/update-Password', [
    'uses' => 'Admin\GeneralSettingsController@password_change',
    'as' => 'change.password'
]);
Route::post('/update-password/store', [
    'uses' => 'Admin\GeneralSettingsController@password_update',
    'as' => 'update.password'
]);
});

Route::group(['middleware' => ['auth', 'web']], function() {

Route::get('user/queries', 'UserController@queries')->name('user.queries');
Route::get('user/queries/view/{id}', 'UserController@queryView')->name('user.queries.view');
Route::get('user/dashboard', 'UserController@dashboard')->name('user.dashboard');

});
