<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blogs','blogViewController@index');

Route::get('/blogs/:{id}', 'blogViewController@show');

Route::get('blogs/create', 'newBlogController@showForm');

Route::post('blogs/create', 'newBlogController@validateForm');


