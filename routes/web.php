<?php

Auth::routes();

Route::get('/', function () {
    $name = 'Carly';

    return view('welcome', compact('name'));
    /*
    return view('welcome', [
        'name' => 'world'
    ]);*/
});

Route::get('about', function () {
    return view('about')->with('name', 'World');
});
/* ----------------------------------------
U S E R S
------------------------------------------*/

Route::get('/users', 'UsersController@index');
Route::get('/users/{user}', 'UsersController@show');


/* ----------------------------------------
T A S K S
------------------------------------------*/

Route::get('/tasks', 'TasksController@index');


Route::get('/tasks/create', 'TasksController@create');

Route::post('/tasks', 'TasksController@store');

Route::get('/tasks/{task}', 'TasksController@show');


Route::get('/home', 'HomeController@index');
