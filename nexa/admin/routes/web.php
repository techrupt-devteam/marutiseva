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


Route::get('admin/', 									'Admin\AuthController@login');
Route::get('/', 									'Admin\AuthController@login');
Route::get('admin/test_url', 									'Admin\AuthController@test_url');

Route::get('admin/login', 								'Admin\AuthController@login');

Route::post('admin/login_process', 						'Admin\AuthController@login_process');

Route::get('admin/forget_password', 					'Admin\AuthController@forget_password');

Route::post('admin/forget_password_process', 			'Admin\AuthController@forget_password_process');

Route::get('admin/logout',		 						'Admin\AuthController@logout');


Route::post('admin/capture_payment',		 			'Admin\MobileapiController@capture_payment');
Route::post('admin/offer_capture_payment',		 			'Admin\MobileapiController@offer_capture_payment');
Route::get('admin/check_db',		 			'Admin\MobileapiController@check_db');
Route::post('/admin/getvarient',		 				'Admin\BookingController@getvarient');
Route::post('/admin/getcolor',		 					'Admin\BookingController@getcolor');
Route::post('/admin/getprice',		 					'Admin\BookingController@getprice');

Route::get('/admin/change_password',		 					'Admin\AuthController@change_password');
Route::post('/admin/change_password_process',		 					'Admin\AuthController@change_password_process');


Route::post('/admin/getcity',		 					'Admin\BookingController@getcity');
Route::post('/admin/getarea',		 					'Admin\BookingController@getarea');
	Route::post('/admin/getpincode',		 				'Admin\BookingController@getpincode');

Route::group(['prefix' => 'admin','middleware' => 'admin'], function () 
{
	Route::get('/dashbord',		 					'Admin\AuthController@dashbord');

	Route::get('/manage_booking',		 				'Admin\BookingController@index');
	Route::get('/book_you_service',		 				'Admin\BookingController@book_you_service');

	Route::get('/test_drive',		 				'Admin\BookingController@test_drive');

	Route::get('/quotations',		 				'Admin\BookingController@quotations');
	Route::get('/finance',		 				'Admin\BookingController@finance');

	Route::get('/insurance',		 				'Admin\BookingController@insurance');




	Route::get('/download_bookings',		 			'Admin\BookingController@download_bookings');
	Route::get('/download_nexa_showroom_visits',		 			'Admin\BookingController@download_nexa_showroom_visits');

	

	Route::get('/manage_delivery_boy',		 		'Admin\BookingController@delivery_index');
	Route::get('/add_booking',		 					'Admin\BookingController@add');
	Route::post('/store_booking',		 				'Admin\BookingController@store');
	Route::get('/view_booking/{id}',	 				'Admin\BookingController@view');
	Route::get('/edit_booking/{id}',		 			'Admin\BookingController@edit');
	Route::post('/update_booking/{id}',		 		'Admin\BookingController@update');
	Route::get('/delete_booking/{id}',		 			'Admin\BookingController@delete');
	Route::get('/add_deliverty_boy',		 		'Admin\BookingController@deliverty_boy_add');
	Route::post('/store_deliverty_boy',		 		'Admin\BookingController@deliverty_boy_store');
	Route::get('/active_store/{id}',		 			'Admin\BookingController@active_store');
	Route::get('/view_deliverty_boy/{id}',	 		'Admin\BookingController@deliverty_boy_view');
	Route::get('/edit_deliverty_boy/{id}',		 	'Admin\BookingController@deliverty_boy_edit');
	Route::post('/update_deliverty_boy/{id}',		'Admin\BookingController@deliverty_boy_update');
	Route::get('/delete_deliverty_boy/{id}',		'Admin\BookingController@deliverty_boy_delete');

	Route::get('/manage_store',		 				'Admin\BookingController@store_index');
	Route::get('/add_store',		 				'Admin\BookingController@store_add');
	Route::post('/store_store',		 				'Admin\BookingController@store_store');
	Route::get('/view_store/{id}',	 				'Admin\BookingController@store_view');
	Route::get('/edit_store/{id}',		 			'Admin\BookingController@store_edit');
	Route::post('/update_store/{id}',				'Admin\BookingController@store_update');
	Route::get('/delete_store/{id}',				'Admin\BookingController@store_delete');

	Route::post('/approve_user/{id}',		 		'Admin\BookingController@approve_user');
	
	Route::get('/edit_address/{id}',		 		'Admin\BookingController@edit_address');
	Route::post('/update_address/{id}',		 		'Admin\BookingController@update_address');
	Route::post('/assign_credit_user/{id}',		 	'Admin\BookingController@assign_credit_user');
	Route::get('/get_user_suggestion',		 	    'Admin\BookingController@get_user_suggestion');
	


});