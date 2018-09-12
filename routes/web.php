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


Route::get('/', 'PagesController@index');

Route::get('/squat', 'PagesController@squat');
Route::get('/squat/freesubmit', 'PagesController@squatfreesubmit');
Route::get('/squat/paidsubmit', 'PagesController@squatpaidsubmit');

Route::get('/bench', 'PagesController@bench');
Route::get('/deadlift', 'PagesController@deadlift');
