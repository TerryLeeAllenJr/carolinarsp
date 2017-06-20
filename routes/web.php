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



Route::get('/', [
    'as' => 'web.home',
    'uses' => 'HomeController@showPage'
]);

Route::get('/thank-you', [
    'as' => 'web.thank-you',
    'uses' => 'ContactController@showThankYou'
]);

Route::get('/about-us', [
    'as' => 'web.about-us',
    'uses' => 'AboutUsController@showPage'
]);

Route::get('/contact', [
    'as' => 'web.contact',
    'uses' => 'ContactController@showPage'
]);

Route::post('/contact', [
    'as' => 'web.contact.post',
    'uses' => 'ContactController@postContact'
]);

Route::get('/services', [
    'as' => 'web.services',
    'uses' => 'ServiceController@showPage'
]);

Route::get('/services/{slug}', [
    'as' => 'web.services.service',
    'uses' => 'ServiceController@showPage'
]);

Route::get('/404', ['as' => 'error.404'],function(){
    dd('404');
});
