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
    return redirect('/auth/login');
});

Route::get('/permohonan','PermohonanController@index');
Route::get('/permohonan/create','PermohonanController@create');
Route::post('/permohonan/store','PermohonanController@store');
Route::get('/permohonan/edit/{id}','PermohonanController@edit');
Route::post('/permohonan/update','PermohonanController@update');
Route::get('/permohonan/destroy/{id}','PermohonanController@destroy');
Route::get('/permohonan/getDownload','PermohonanController@getDownload');
Route::get('/permohonan/result','PermohonanController@index2');

Route::get('/list','TindakLanjutController@index');
Route::get('/list/create/{id}','TindakLanjutController@create');
Route::post('/list/store','TindakLanjutController@store');

Route::get('/staff','StaffController@index');
Route::get('/staff/create/{id}','StaffController@create');
Route::post('/staff/store','StaffController@store');
Route::get('/staff/send/{id}','StaffController@send');
Route::get('/staff/index2','StaffController@index2');
Route::get('/staff/revisi','StaffController@revisi');
Route::post('/staff/sendrevisi','StaffController@sendrevisi');


Route::get('/spv','SuperAdminController@index');
Route::get('/spv/send/{id}','SuperAdminController@send');
Route::post('/spv/store','SuperAdminController@store');

Route::get('/manager','SuperAdminController@index2');
Route::get('/manager/sendmanager/{id}','SuperAdminController@sendmanager');

// Authentication routes...
Route::get('auth/login', 'LoginController@login');
Route::post('auth/login', 'LoginController@authentication');
Route::get('auth/logout', 'LoginController@logout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');