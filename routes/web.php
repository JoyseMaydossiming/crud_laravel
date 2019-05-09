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

Route::get('/', 'Get@retrieve');

Route::get('/create', 'Get@create');
Route::post('/create', 'Post@create');

Route::get('/update', 'Get@update');
Route::post('/update/{id}', 'Post@update');

Route::get('/destroy/{id}', 'Get@destroy');