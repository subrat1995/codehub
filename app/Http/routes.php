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


Route::group(['middlewareGroups' => 'web'],function(){



	Route::get('/', function () {
    	return view('welcome');
	})->name('home');

	Route::get('/about-us', function(){
		return view('about');
	})->name('aboutus');

	Route::get('/past-events', function(){
		return view('past');
	})->name('pastevents');

	Route::get('/upcoming-events', function(){
		return view('upcoming');
	})->name('upcomingevents');

	Route::get('/current-events', function(){
		return view('current');
	})->name('currentevents');

	Route::get('/event/the-lost-symbols', function(){
		return view('events.thelostsymbol');
	})->name('thelostsymbol');

	Route::get('/event/the-lost-symbols/about', function(){
		return view('events.thelostsymbolabout');
	})->name('thelostdescription');

	Route::get('/event/the-lost-symbols/sign', function(){
		return view('events.thelostsymbolsign');
	})->name('thelostsign');

	


});




//Route::get('/dashboard', 'UserController@DashBoard');
