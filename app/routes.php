<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'SiteController@showLogin');

Route::get('/demo/{page}', 'DemoController@showPage');
Route::post('/form/addUser', 'FormController@addUser');

Route::get('/login', array('as' => 'login', 'uses' => 'LoginController@showIndex'));