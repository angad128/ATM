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


Route::get('/','BasicController@home');
Route::get('/register','BasicController@getRegister');

Route::post('/newuser','UserController@newUser');
Route::post('/login','UserController@login');
Route::get('/logout','UserController@logout');

Route::get('/dashboard','DashboardController@dashboard');
Route::get('/balance','DashboardController@balanceEnquiry');
Route::get('/changePin','DashboardController@getChangePin');
Route::post('/postChangePin','DashboardController@postChangePin');
Route::get('/statement','DashboardController@statement');
// deposit 
Route::get('/deposit','DepositController@getDeposit');
Route::post('/postdeposit','DepositController@postDeposit');
// Withdrawn 
Route::get('/withdrawn','WithdrawnController@getWithdrawn');
Route::post('/postWithdrawn','WithdrawnController@postWithdrawn');
