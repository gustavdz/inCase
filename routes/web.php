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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/verify-user/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');

Route::post('meeting/{id}/update','MeetingsController@update_meeting')->name('meeting.update');
Route::post('meeting/{id}/meetingdrop','MeetingsController@drop_meeting')->name('meeting.drop');
Route::post('meeting/{id}/meetingresize','MeetingsController@resize_meeting')->name('meeting.resize');
Route::post('meeting/{id}/meetingdelete','MeetingsController@delete_meeting')->name('meeting.delete');
Route::post('meeting/store','MeetingsController@add_meeting')->name('meeting.store');

Route::get('/meetings', 'MeetingsController@index')->name('meetings');
