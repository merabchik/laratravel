<?php
/**
 * Index page route
 */
Route::get('/', 'Front\IndexController@index')->name('index');
/**
 * About page route
 */
Route::get('/about', 'Front\IndexController@about')->name('about');
/**
 * Tours routes
 */
Route::get('/tours', /*[
    'middleware' => 'encryptcookies',
    'uses' => 'Front\ToursController@index',
]*/
'Front\ToursController@index')->name('tours');

Route::get('/tour/{id}', 'Front\ToursController@tour')->where(['id' => '[0-9]+', 'lang_id' => '[0-9]+'])->name('tour');
/**
 * Cars routes
 */
Route::get('/cars', 'Front\CarsController@index')->name('cars');
Route::get('/car/{id}', 'Front\CarsController@index')->where('id', '[0-9]+')->name('car');
/**
 * Hotels routes
 */
Route::get('/hotels', 'Front\HotelsController@index')->name('hotels');
Route::get('/hotel/{id}', 'Front\CarsController@index')->where('id', '[0-9]+')->name('hotel');
/**
 * Flights routes
 */
Route::get('/flights', 'Front\FlightsController@index')->name('flights');
Route::get('/flight/{id}', 'Front\FlightsController@index')->where('id', '[0-9]+')->name('flight');

Route::get('api/tours', function () {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return \App\Models\TourDetail::where(['lang_id' => 1])->get();
});


/**
 * Admin routers with middleware CheckAdminPerms
 */

Route::group(['middleware' => 'CheckAdminPerms'], function () {
    Route::get( '/admin/tours', 'UserController@getData' );
    Route::post( '/admin/tour/{id}', 'UserController@postData' );

    Route::post( '/admin/users/', 'UserController@postData' );
    Route::post( '/admin/user/{id}', 'UserController@postData' );

    Route::post( '/admin/tour/{id}', 'UserController@postData' );
    Route::post( '/admin/tour/{id}', 'UserController@postData' );

    Route::post( '/admin/hotels', 'UserController@postData' );
    Route::post( '/admin/hotel/{id}', 'UserController@postData' );

    Route::post( '/admin/cars', 'UserController@postData' );
    Route::post( '/admin/car/{id}', 'UserController@postData' );

    Route::post( '/admin/bookings', 'UserController@postData' );
    Route::post( '/admin/booking/{id}', 'UserController@postData' );
});