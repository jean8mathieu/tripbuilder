<?php

namespace App\Http\Controllers;

use App\Plane;
use Illuminate\Http\Request;

class PlaneController extends Controller
{
    /**
     * Return all the possible planes possible to use
     *
     * @return array
     */
    public function getAllPlanes()
    {
        if(count($planes = Plane::getAllPlanes()) > 0) {
            return ['error' => false, 'result' => $planes];
        } else {
            return ['error' => true, 'message' => 'No plane was found'];
        }
    }

    /**
     * Return all the planes that have at least the amount of passenger asked
     *
     * @param Request $request
     * @return array
     */
    public function getPlaneByMinimumPassenger(Request $request)
    {
        if(is_numeric($request->amount) && count($planes = Plane::getPlaneByMinimumPassenger($request->amount))) {
            return ['error' => false, 'result' => $planes];
        } else {
            return ['error' => true, 'message' => 'No plane was found'];
        }
    }
}
