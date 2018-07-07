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

Route::group([
    'prefix' => 'api'
], function () {
    //Main index route
    Route::get('/', 'APIController@getIndex');

    //airport route with sub folder
    Route::group([
        'prefix' => 'airport'
    ], function () {
        Route::get('', 'AirportController@getIndex');
        Route::get('name/{name}', 'AirportController@getLikeNameAirport');
        Route::get('country/{country}', 'AirportController@getLikeCountryAirport');
        Route::get('all', 'AirportController@getAllAirport');
    });

    //plane route with sub folder
    Route::group([
        'prefix' => 'plane'
    ], function () {
        Route::get('all', 'PlaneController@getAllPlanes');
        Route::get('minimum_passenger/{amount}', 'PlaneController@getPlaneByMinimumPassenger');
    });

    //flight route with sub folder
    Route::group([
        'prefix' => 'flight'
    ], function () {
        Route::get('all', 'FlightController@getAllFlights');
        Route::get('insert/{departure}/{arrival}/{plane_id}/{date_departure}/{date_arrival}/{airline_id}',
            'FlightController@addANewFlight');
        Route::get('find/airline/{airline_id}', 'FlightController@findFlightByAirline');
        Route::get('delete/{id}', 'FlightController@deleteFlightByID');
    });

    //airline route with sub folder
    Route::group([
        'prefix' => 'airline'
    ], function () {
        Route::get('all', 'AirlineController@getAllAirlines');
        Route::get('name/{name}', 'AirlineController@getAirlinesByName');
    });

    //trip route with sub folder
    Route::group([
        'prefix' => 'trip'
    ], function () {
        Route::get('all', 'TripController@getAllTrips');
        Route::get('find/{id}', 'TripController@getTripByID');
        Route::get('insert/{first_name}/{last_name}/{age}/{flight_id}', 'TripController@insertTrip');
        Route::get('delete/{id}', 'TripController@DeleteTripByID');
        Route::get('flight/{trip_id}','TripController@getFlightByTripID');
    });

});