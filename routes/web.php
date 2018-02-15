<?php
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});


/**
 * START OF ROUTES
 */
Route::get('/testpage', function(){
    return view('testpage');
});

// Route::get('/wikihome', 'LinkController@index')->name('wikihome')->name('wikihome');

Route::prefix('wiki')->name('wiki.')->group(function(){
    Route::get('/', 'LinkController@index')->name('index');

    Route::get('create', 'LinkController@create')->name('create');
    Route::post('/', 'LinkController@store')->name('store');
});

Route::get('home', function(){
    return redirect('wikihome');
});
