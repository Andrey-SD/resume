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

Route::get('/','Publish\HomeController@home');

Route::get('/home','Publish\HomeController@home');

Route::get('/projects','Publish\ProjectsController@projects');

Route::get('/resume','Publish\ResumeController@resume');

Route::get('/contacts','Publish\ContactsController@contacts');

Route::post('/send-mail','Mail\Incoming@send');

Route::get('/dash-auth','Auth\LoginController@showLoginForm');

Route::post('/dash-auth','Auth\LoginController@login')->name('login');

Route::get('/logout','Auth\LoginController@logout');

Route::get('/my-dash','Admin\DashController@dash')->middleware('auth');

Route::post('/my-dash','Admin\DashController@code_edit')->name('code_edit');

Route::get('/test', function(){ return view('layouts.workmain');});



