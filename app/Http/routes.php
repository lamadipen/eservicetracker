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

Route::resource('user', 'UserController');

Route::get('hello', function() {
	return View::make('hello');
});

Route::get('teststring', function() {
    return View::make('admin.category');
});

Route::get('admin', function()
{
    return View::make('admin.master');
   //return 'hello';
});

Route::resource('category','CategoryController');
Route::resource('meeting','MeetingController');
Route::resource('guestspeaker','GuestSpeakerController');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

