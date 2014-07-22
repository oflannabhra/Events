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

/*General Routes */
Route::get('/', array('as' => 'home', function(){

	return View::make('hello');
}));

Route::resource('user', 'UserController');

/* Session Routes */
// Route::get('/login', array('as' => 'login', 'uses' => 'SessionController@create'));
// Route::get('/logout', array('as' => 'logout', 'uses' => 'SessionController@destroy'));

Route::get('/signup', array('as' => 'signup', 'uses' => 'UserController@create'));
Route::post('signup', 'UserController@store');

/* Event Routes */
//Route::resource('event', 'EventController');

