<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'flights';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'departure',
        'arrival',
        'plane_id',
        'date',
        'airline_id',
    ];

    /**
     * Get the Airport from from belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function from_airport()
    {
        return $this->belongsTo('App\Airport', 'departure', 'id');
    }

    /**
     * Get the Airport from  to belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function to_airport()
    {
        return $this->belongsTo('App\Airport', 'arrival', 'id');
    }

    /**
     * Get the Plane from  plane_id belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plane()
    {
        return $this->belongsTo('App\Plane', 'plane_id', 'id');
    }

    /**
     * Get the airline from airline_id
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function airline()
    {
        return $this->belongsTo('App\Airline', 'airline_id', 'id');
    }

    /**
     * Return all flights
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getAllFlights()
    {
        return Flight::query()->get();
    }

    /**
     * Insert the flight by giving an array of all the required column.
     *
     * @param $parameters
     * @return bool
     */
    public static function insertFlight($parameters)
    {
        $flight = new Flight();

        foreach ($parameters as $key => $value) {
            $flight->{$key} = $value;
        }

        return $flight->save();
    }

    /**
     * Validating the date make sure it's correct
     *
     * @param $date
     * @param string $format
     * @return bool
     */
    public static function validateDate($date, $format = 'Y-m-d H:i:s')
    {
        $d = \DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }

    /**
     * Checking the Flight and look for the airline specified
     *
     * @param $airline_id
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getFlightByAirline($airline_id)
    {
        return Flight::query()
            ->where('airline_id', '=', $airline_id)
            ->get();
    }
}
