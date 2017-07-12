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
    return view('layouts.master');
});

// Dashboard
Route::get('/dashboard', [
    'uses' => 'UserController@getDashboard',
    'as' => 'dashboard',
]);

// Sign up
Route::get('/sign-up', 'UserController@getSignUp');
Route::post('/sign-up', [
    'uses' => 'UserController@postSignUp',
    'as' => 'sign-up',
]);

// Sign in
Route::get('/sign-in', 'UserController@getSignIn');
Route::post('/sign-in', [
    'uses' => 'UserController@postSignIn',
    'as' => 'sign-in',
]);