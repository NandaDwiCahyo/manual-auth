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

Route::get('/register', 'AuthController@getRegister')->middleware('guest');
Route::post('/postRegister', 'AuthController@postRegister')->middleware('guest');
Route::get('/login', 'AuthController@getLogin')->middleware('guest')->name('login');
Route::post('/postLogin', 'AuthController@postLogin')->middleware('guest');
Route::get('/home', function ()
{
	return view('home');
})->middleware('auth');
Route::get('/logout', 'AuthController@logout')->middleware('auth');

Route::get('/about', function ()
{
	return "About Page";
});
