<?php

use Illuminate\Support\Facades\Route;


// Design Route
Route::get('/','FrontEndController@home')->name('website');

Route::get('/journal/{slug}','FrontEndController@journal')->name('website.journal');

Route::get('/continue_reading/{slug}','FrontEndController@continue_reading')->name('website.continue_reading');

Route::get('/contact','FrontEndController@contact')->name('website.contact');




// Admin Route
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('/dashboard', function(){
            return view('admin.dashboard.index');
    });
	
	Route::resource('category','CategoryController');
	Route::resource('tag','TagController');
	Route::resource('post','PostController');
	Route::resource('user', 'UserController');
	
});












