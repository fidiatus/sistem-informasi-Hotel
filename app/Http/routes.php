<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function() {
	Route::get('/home', 'HomeController@index');
	Route::get('/kamar', 'KamarController@index');
	Route::get('/booking', 'BookingController@index');
	Route::get('/type', 'TypeKamarController@index');
	Route::get('/pelanggan', 'PelangganController@index');
	Route::get('/booking/pdf',array('as'=>'booking/pdf','uses'=>'BookingController@getPdf'));
	Route::get('/pelanggan/pdf',array('as'=>'pelanggan/pdf','uses'=>'PelangganController@getPdf'));

	Route::resource('pelanggan','PelangganController');
	Route::resource('type','TypeKamarController');
	Route::resource('booking','BookingController');
	Route::resource('kamar','KamarController');
	});

Route::auth();