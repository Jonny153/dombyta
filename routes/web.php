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

Route::get('/', 'MainController@index');


Route::get('{category}/{group?}/{service?}', 'MainController@category')
    ->where(['category' => '[a-z]+', 'group' => '[a-z_]+]', 'service' => '[a-z_]+']);

Route::post('/call', 'FeedbackController@call')->name('call');