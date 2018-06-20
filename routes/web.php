<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('welcome');
});

Route::get('/feedback', function () {
    view('threads.feedback');
});


Route::get('/threads', 'ThreadsController@index');

Route::get('/threads/{thread}', 'ThreadsController@show')->name('threads.show');

Auth::routes();

