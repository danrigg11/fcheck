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

/* User Section */
Route::get('/', 'PagesController@index');
Route::get('/userindex', 'PagesController@userindex');
Route::get('/trainer', 'PagesController@trainer');

Route::get('/squat', 'PagesController@squat');
Route::get('/squat/freesubmit', 'PagesController@squatfree');
Route::get('/squat/paidsubmit', 'PagesController@squatpaidsubmit');
Route::get('/squat/prosubmit', 'PagesController@squatprosubmit');

Route::get('/bench', 'PagesController@bench');
Route::get('/bench/freesubmit', 'PagesController@benchfree');
Route::get('/bench/paidsubmit', 'PagesController@benchpaidsubmit');
Route::get('/bench/prosubmit', 'PagesController@benchprosubmit');

Route::get('/deadlift', 'PagesController@deadlift');
Route::get('/deadlift/freesubmit', 'PagesController@deadliftfree');
Route::get('/deadlift/paidsubmit', 'PagesController@deadliftpaidsubmit');
Route::get('/deadlift/prosubmit', 'PagesController@deadliftprosubmit');

Route::get('/other', 'PagesController@other');
Route::get('/other/freesubmit', 'PagesController@otherfree');
Route::get('/other/paidsubmit', 'PagesController@otherpaidsubmit');
Route::get('/other/prosubmit', 'PagesController@otherprosubmit');

/* Trainer Section */
Route::get('/trainerindex', 'PagesController@trainerindex');
