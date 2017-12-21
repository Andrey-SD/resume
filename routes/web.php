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

Route::get('/test', function () {
    return view('test');
});

Route::get('/','HomeController@home');

Route::get('/projects','ProjectsController@projects');

Route::get('/resume','ResumeController@resume');

Route::get('/contacts','ContactsController@contacts');

Route::post('/send-mail','Mail\Incoming@send');


