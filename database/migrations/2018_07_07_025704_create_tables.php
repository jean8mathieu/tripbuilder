<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Creating Airports table
        Schema::create('airports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 3)->unique();
            $table->integer('lat');
            $table->integer('lon');
            $table->string('name', 50)->unique();
            $table->string('city', 100)->default("Unknown");
            $table->string('state', 50)->default("Unknown");
            $table->string('country', 50)->default("Unknown");
            $table->integer('woeid')->unsigned();
            $table->string('tz', 50);
            $table->string('phone', 25);
            $table->string('email', 75);
            $table->integer('elev')->nullable();
            $table->string('icao', 4);
            $table->timestamps();
        });

        //Creating Airlines table
        Schema::create('airlines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('iata', 2)->unique();
            $table->string('name', 50)->unique();
            $table->timestamps();
        });

        //Creating Planes table
        Schema::create('planes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', '50')->unique();
            $table->string('short_name_1', '3')->nullable();
            $table->string('short_name_2', '5')->nullable();
            $table->integer('max_passenger');
            $table->timestamps();
        });

        //Create Flights table
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('departure')->unsigned();
            $table->integer('arrival')->unsigned();
            $table->integer('plane_id');
            $table->timestamp('date_departure')->nullable();
            $table->timestamp('date_arrival')->nullable();
            $table->integer('airline_id')->unsigned();
            $table->foreign('departure')->references('id')->on('airports');
            $table->foreign('arrival')->references('id')->on('airports');
            $table->foreign('airline_id')->references('id')->on('airlines');
            $table->timestamps();
        });

        //Create Flights table
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->integer('age')->unsigned();
            $table->integer('flight_id')->unsigned();
            $table->foreign('flight_id')->references('id')->on('flights');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Dropping Flights table
        Schema::dropIfExists('flights');
        //Dropping Airports table
        Schema::dropIfExists('airports');
        //Dropping Airlines table
        Schema::dropIfExists('airlines');
        //Dropping Planes table
        Schema::dropIfExists('planes');
        //Dropping Flights table
        Schema::dropIfExists('trips');
    }
}
