<?php

namespace App\Http\Controllers;

use App\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Return all the trips in our database
     *
     * @return array
     */
    public function getAllTrips()
    {
        if (count($trips = Trip::getAllTrips()) > 0) {
            return ['error' => false, 'result' => $trips];
        } else {
            return ['error' => true, 'message' => 'No trip found'];
        }
    }

    /**
     * Return the trip by the id you specified
     *
     * @param Request $request
     * @return array
     */
    public function getTripByID(Request $request)
    {
        if (count($trip = Trip::getTripByID($request->id)) > 0) {
            return ['error' => false, 'result' => $trip];
        } else {
            return ['error' => true, 'message' => 'No trip found'];
        }
    }

    /**
     * Delete the trip by ID
     *
     * @param Request $request
     * @return array
     * @throws \Exception
     */
    public function DeleteTripByID(Request $request)
    {
        if (count($trip = Trip::find($request->id)) > 0) {
            if ($trip->delete()) {
                return ['error' => false, 'message' => 'Trip deleted'];
            } else {
                return ['error' => true, 'message' => 'Unable to delete your trip'];
            }
        } else {
            return ['error' => true, 'message' => 'No trip found to delete'];
        }
    }

    /**
     * Insert the trip requested into the database
     *
     * @param Request $request
     * @return array
     */
    public function insertTrip(Request $request)
    {
        //Parameters required to add a trip
        $parameters = [
            'first_name' => 'string',
            'last_name' => 'string',
            'age' => 'int',
            'flight_id' => 'int',
        ];

        $errors = [];
        foreach ($parameters as $key => $value) {
            switch ($value) {
                case "int":
                    //If the value isn't a number or isn't greater than 0
                    if (!is_numeric($request->{$key}) || !$request->{$key} > 0) {
                        $errors[] = "The variable {$key} must be a number and must be greater than 0";
                    }
                    break;
                case "string":
                default:
                    //Check to make sure the value is not null or it will error out
                    if (is_null($request->{$key})) {
                        $errors[] = "You can not submit empty value. Make sure you have all the parameter required.";
                    }
            }
        }

        $trip = [];
        foreach ($parameters as $key => $value) {
            $trip[$key] = $request->{$key};
        }

        if (count($errors) == 0 && Trip::insertTrip($trip)) {
            return ['error' => false, 'message' => 'Your trip have been added!'];
        } else {
            return ['error' => true, 'message' => 'We could not add your trip. Please try again.'];
        }
    }

    public function getFlightByTripID(Request $request)
    {
        if (count($trip = Trip::getFlightByTripID($request->trip_id)) > 0) {
            return ['error' => false, 'result' => $trip];
        } else {
            return ['error' => true, 'message' => 'Flight not found'];
        }
    }
}
