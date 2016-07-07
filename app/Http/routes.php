<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/programs', function () {
	return view('programs');
});

Route::get('/programs/nlptfit', function () {
	return view('nlptfit');
});

Route::get('/programs/nlptteam', function () {
	return view('nlptteam');
});

Route::get('/programs/nlptyouth', function () {
	return view('nlptyouth');
});

Route::get('/programs/nlptrehab', function () {
	return view('nlptrehab');
});

Route::get('/blogs', function () {
	return view('blogs');
});

Route::get('/contact', function () {
	return view('contact');
});

Route::get('/about', function () {
	return view('about');
});

Route::get('/about/coaches', function () {
	return view('coaches');
});

Route::get('/about/coaches/{id}', function () {
	return view('hopf');
});

Route::get('/about/stories', function () {
	return view('stories');
});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
