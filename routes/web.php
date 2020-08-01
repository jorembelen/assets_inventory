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

Route::resource('/assets', 'AssetController');
Route::resource('/employees', 'EmployeeController');
Route::resource('/checkIns', 'CheckInController');
Route::resource('/checkOuts', 'CheckOutController');

Route::get('/print{id}', 'CheckOutController@print')->name('issue.form');
Route::get('/select-{emp_id}', 'CheckOutController@select')->name('multi.select');
Route::post('/printSelect', 'CheckOutController@printSelect')->name('print.select');

Route::get('/history', 'CheckOutController@history');
Route::get('/assigned', 'AssetController@assigned');
Route::get('/assignable', 'AssetController@assignable');

Route::post('/import', 'EmployeeController@import')->name('import');

Route::post('/search','EmployeeController@search');
