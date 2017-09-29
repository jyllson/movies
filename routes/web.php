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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies',
	[
		'as' => 'all-movies',
		'uses' => 'MoviesController@index'
	]
);

Route::get('/movie/add',
	[
		'as' => 'movie-add',
		'uses' => 'MoviesController@create'
	]
);

Route::get('/movie/{id}',
	[
		'as' => 'single-movie',
		'uses' => 'MoviesController@show'
	]
);

Route::post('/movies', 
	[
		'as' => 'store-movie',
		'uses' => 'MoviesController@store'
	]
);

Route::post('/movies/{movieId}/comment',
	[
		'as' => 'comments-movie',
		'uses' => 'CommentsController@store'
	]
);