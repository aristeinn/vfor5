<?php

Route::get('/', function () {
    return redirect('home');
});

Route::get('/home', function () {
	$msg = "Homepage";
    return $msg;
});


Route::get('/threads','ThreadsController@index');

Route::get('/threads/create', 'ThreadsController@create');

Route::get('/threads/{id}', 'ThreadsController@show');

Auth::routes();


