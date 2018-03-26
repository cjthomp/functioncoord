<?php

Route::get('/', 'WelcomeController@index')->name('splash');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mockups/{view}', 'MockupsController@index')->name('mockup');
