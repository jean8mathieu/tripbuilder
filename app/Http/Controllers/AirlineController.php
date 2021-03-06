<?php

namespace App\Http\Controllers;

use App\Airline;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    /**
     * Return all the airline from the database
     * @return array
     */
    public function getAllAirlines()
    {
        if (count($airline = Airline::getAllAirlines()) > 0) {
            return ['error' => false, 'result' => $airline];
        } else {
            return ['error' => true, 'message' => 'No airline found'];
        }
    }

    /**
     * Return all the airline with the name specified
     * @param Request $request
     * @return array
     */
    public function getAirlinesByName(Request $request)
    {
        if (count($airline = Airline::getAllAirlinesByName($request->name))) {
            return ['error' => false, 'result' => $airline];
        } else {
            return ['error' => true, 'message' => 'No airline found'];
        }
    }
}
