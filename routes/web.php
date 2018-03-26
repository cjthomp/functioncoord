<?php

Route::get('/', 'WelcomeController@index')->name('splash');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Named routes allow us to swap these mocks out for the implemented counterparts without changing the views
Route::get('/mockups/dashboard', 'MockupsController@dashboard')->name('dashboard');
Route::get('/mockups/event/{event}', 'MockupsController@event')->name('event');
Route::get('/mockups/profile', 'MockupsController@profile')->name('profile');
Route::get('/mockups/company', 'MockupsController@company')->name('company');
Route::get('/mockups/notifications', 'MockupsController@notifications')->name('notifications');
Route::get('/mockups/tasks', 'MockupsController@tasks')->name('tasks');
Route::get('/mockups/calendar', 'MockupsController@calendar')->name('calendar');

// Catch any other mockups calls
Route::get('/mockups/{view}', 'MockupsController@index')->name('mockup');
