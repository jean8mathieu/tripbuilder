<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'airports';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'lat',
        'lon',
        'name',
        'city',
        'state',
        'country',
        'woeid',
        'tz',
        'phone',
        'email',
        'elev',
        'icao'
    ];

    /**
     * Return all the airport in ascending order
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getAllAirport()
    {
        return Airport::query()
            ->orderBy('name', 'ASC')
            ->get();
    }

    /**
     * Return all the airport with name
     *
     * @param $name
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getAllAirportWithName($name)
    {
        return Airport::query()
            ->where('name', 'LIKE', '%' . $name . '%')->get();
    }

    /**
     * Return all airport with country
     *
     * @param $country
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getAllAirportWithCountry($country)
    {
        return Airport::query()
            ->where('country', 'LIKE', '%' . $country . '%')->get();

    }
}



