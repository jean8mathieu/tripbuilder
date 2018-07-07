<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'trips';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'age',
        'flight_id',
    ];

    /**
     * Insert the trip into the database
     *
     * @param $parameters
     * @return bool
     */
    public static function insertTrip($parameters)
    {
        $trip = new Trip();

        foreach ($parameters as $key => $value) {
            $trip->{$key} = $value;
        }

        return $trip->save();
    }

    /**
     * Return all the trip by ID
     *
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|Model|null|static|static[]
     */
    public static function getTripByID($id)
    {
        return Trip::find($id);
    }

    /**
     * Return all the trips in the database
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getAllTrips()
    {
        return Trip::query()->get();
    }

    /**
     * Get the flight object from the relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function flight()
    {
        return $this->belongsTo('App\Flight', 'flight_id', 'id');
    }

    /**
     * Return the flight from the trip ID
     *
     * @param $id
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public static function getFlightByTripID($id)
    {
        if (count($trip = Trip::find($id)) > 0)
            return $trip->flight()->get();
        return Trip::find($id);
    }

}
