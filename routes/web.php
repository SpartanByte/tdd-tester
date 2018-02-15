<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/testpage', function(){
    return view('testpage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
