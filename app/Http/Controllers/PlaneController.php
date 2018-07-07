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
        return [
            'error' => false,
            'result' =>
                Plane::query()->get(
                    ['id', 'name', 'short_name_1', 'short_name_2', 'max_passenger']
                )
        ];
    }

    /**
     * Return all the planes that have at least the amount of passenger asked
     *
     * @param Request $request
     * @return array
     */
    public function getPlaneByMinimumPassenger(Request $request)
    {
        return [
            'error' => false,
            'result' =>
                Plane::query()
                    ->where('max_passenger', '>=', $request->amount)
                    ->get(
                        ['id', 'name', 'short_name_1', 'short_name_2', 'max_passenger']
                    )
        ];
    }
}
