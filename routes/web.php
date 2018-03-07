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

Auth::routes();

Route::get('/', 'HomeController@getLogInPage');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pendingleaves', 'HomeController@getPendingLeaves');
Route::get('/randF', 'HomeController@getRandF');
Route::get('/employees', 'HomeController@getEmployees');
Route::get('/blank', 'HomeController@getBlank');
Route::get('/indexHR', 'HomeController@getIndexHR');
Route::get('/empProf', 'HomeController@getEmpProf');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
