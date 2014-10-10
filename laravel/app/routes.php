<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Main Page
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@showHome'));

//Registration Page
Route::get('register', array('as' => 'register', 'uses' => 'UsersController@showRegister'));

//Login Page
Route::get('login', array('as' => 'login', 'uses' => 'UsersController@showLogin'));

Route::post('login', array('as' => 'login', 'uses' => 'UsersController@handleLogin'));