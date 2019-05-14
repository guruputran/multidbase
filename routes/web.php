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

// Route::get('/', function()
// {
//     return View::make('welcome');
// });

// Route::get('/', 'MemberController@index');

// Route::post('memberin', ['as'=>'memberin.store','uses'=>'MemberController@store']);

Route::get('/hd', 'HumptyDumptyController@showdatas');

Route::post('hdin', ['as'=>'hdin.store','uses'=>'HumptyDumptyController@storeHumpty']);
Route::post('/hdpush', ['as'=>'hdpush.pushes','uses'=>'HumptyDumptyController@pushes']);