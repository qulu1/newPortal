<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('/home');
});

Route::get('single/{id}', "NewsController@single");

Route::get('/home', "NewsController@home");

Route::get('category{id}', "NewsController@category");

Route::get('index', "NewsController@index");



Route::get('create', "AdminController@index");

Route::post('/create',"AdminController@create");

Route::get('admin',"AdminController@admin");

Route::post('/admin',"AdminController@categoryadd");


// Route::get('add_cat', "AdminController@add_cats");

// Route::post('/add_cat',"AdminController@create_category");

Route::get('/show',"AdminController@show");

Route::get('/xeber/{xeber}/edit', "AdminController@edit");

Route::patch('/xeber/{xeber}', "AdminController@update");

Route::delete('/xeber/{xeber}/delete', "AdminController@destroy");




Route::auth();
