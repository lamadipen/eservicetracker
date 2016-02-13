<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::get('create_advisor', 'WelcomeController@show');
Route::get('test_advisor', 'AdvisorController');


Route::resource('advisor','AdvisorController');
Route::resource('service_type','ServiceTypeController');
Route::resource('setting','SettingController');
Route::get('invite', function() { return View::make('advisor.advisor_invite'); });



Route::resource('user', 'UserController');



Route::get('test', function() { return View::make('auth.login'); });

Route::resource('category','CategoryController');
Route::resource('meeting','MeetingController');
Route::resource('guestspeaker','GuestSpeakerController');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

