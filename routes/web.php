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

/* Countries */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/country', 'CountryController@index')->name('country');
Route::get('/add/country', 'CountryController@add')->name('addcountry');
Route::any('/add/countryaction', 'CountryController@addAction')->name('addcountryaction');
Route::get('/edit/country/{id}', 'CountryController@edit')->name('editcountry');
Route::any('/update/country', 'CountryController@update')->name('updatecountry');
Route::any('/delete/country/{id}', 'CountryController@delete')->name('deletecountry');

/*cities*/
Route::get('/city', 'CityController@index')->name('city');
Route::get('/add/city', 'CityController@add')->name('addcity');
Route::any('/add/cityaction', 'CityController@addAction')->name('addcityaction');
Route::get('/edit/city/{id}', 'CityController@edit')->name('editcity');
Route::any('/update/city', 'CityController@update')->name('updatecity');
Route::any('/delete/city/{id}', 'CityController@delete')->name('deletecity');

/*cities*/
Route::get('/state', 'StateController@index')->name('state');
Route::get('/add/state', 'StateController@add')->name('addstate');
Route::any('/add/stateaction', 'StateController@addAction')->name('addstateaction');
Route::get('/edit/state/{id}', 'StateController@edit')->name('editstate');
Route::any('/update/state', 'StateController@update')->name('updatestate');
Route::any('/delete/state/{id}', 'StateController@delete')->name('deletestate');

/*customers*/
Route::get('/customer', 'CustomerController@index')->name('customer');
Route::get('/add/customer', 'CustomerController@add')->name('addcustomer');
Route::any('/add/customeraction', 'CustomerController@addAction')->name('addcustomeraction');
Route::get('/edit/customer/{id}', 'CustomerController@edit')->name('editcustomer');
Route::any('/update/customer', 'CustomerController@update')->name('updatecustomer');
Route::any('/delete/customer/{id}', 'CustomerController@delete')->name('deletecustomer');



