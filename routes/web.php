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

Route::get('/posts/{post}', function($post) {
	$posts = [
		'post1' => 'Hello, welcome to my first post!',
		'post2' => 'It\'s my second post!'
	];

	if (! array_key_exists($post, $posts)) {
		abort(404, 'Sorry, that post was not found');
	}
	return view('post', [
		'post' => $posts[$post] 
	]);
});
