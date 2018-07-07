<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'airlines';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'iata',
        'name',
    ];

    /**
     * Return all the Airlines
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getAllAirlines()
    {
        return Airline::query()->get();
    }

    /**
     * Return all the Airlines by name
     *
     * @param $name
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getAllAirlinesByName($name)
    {
        return Airline::query()
            ->where('name', 'LIKE', '%' . $name . '%')
            ->get();
    }
}
