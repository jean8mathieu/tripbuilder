<?php

use Illuminate\Database\Seeder;

class RunAllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Database\Eloquent\Model::unguard();
        $this->call(AirlinesTableSeeder::class);
        $this->call(AirportsTableSeeder::class);
        $this->call(PlanesTableSeeder::class);
        $this->call(FlightsTableSeeder::class);
        $this->call(TripsTableSeeder::class);
        \Illuminate\Database\Eloquent\Model::reguard();
    }
}
