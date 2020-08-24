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


Route::middleware(['auth'])->group(function(){

Route::resource('/checkIns', 'CheckInController');

// CheckOuts
Route::resource('/checkOuts', 'CheckOutController');
Route::get('/print/{id}', 'CheckOutController@print')->name('issue.form');
Route::get('/select/{emp_id}', 'CheckOutController@select')->name('multi.select');
Route::post('/printSelect', 'CheckOutController@printSelect')->name('print.select');
Route::get('/history', 'CheckOutController@history');
Route::get('/import/checkOut', 'CheckOutController@indexImport')->name('checkOut.import');
Route::post('/import/checkOut/assets', 'CheckOutController@import')->name('import.checkOut');
Route::get('/assigned/{id}', 'CheckOutController@assigned')->name('assigned');
Route::post('search/assigned', 'CheckOutController@searchAssigned')->name('search.assigned');
Route::get('/active/assets', 'CheckOutController@active')->name('active');
Route::get('/history/edit/{id}', 'CheckOutController@historyEdit')->name('history.edit');

// Employees
Route::resource('/employees', 'EmployeeController');
Route::post('/import/employees', 'EmployeeController@import')->name('import');
Route::post('/searchEmployees','EmployeeController@search');
Route::get('/import','EmployeeController@indexImport')->name('import.employees');
Route::get('/search/employees','EmployeeController@indexSearch');

// Assets
Route::resource('/assets', 'AssetController');
Route::get('/assigned', 'AssetController@assigned');
Route::get('/assignable', 'AssetController@assignable');
Route::post('/import/assets', 'AssetController@import')->name('import.assets');
Route::get('/import/index', 'AssetController@indexImport')->name('import.index');
Route::post('/search', 'AssetController@searchAsset')->name('search.assets');
Route::get('/scrap', 'AssetController@scrap');
Route::put('/scrap/asset/{id}', 'AssetController@scrapAsset')->name('scrap.asset');
Route::put('/restore/asset/{id}', 'AssetController@restore')->name('restore.asset');
Route::get('/search/assets', 'AssetController@indexSearch');

});
