<?php

Route::get('/', function () {
    return view('splash');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mockups/{view}', 'MockupsController@index')->name('mockup');
