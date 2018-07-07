<?php

use Illuminate\Database\Seeder;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $firstName = [
            'Jean',
            'Mark',
            'Ronald',
            'Christopher',
            'Ryan',
            'Ethan',
            'John',
            'Zoey',
            'Sarah',
            'Michelle',
            'Samantha',
            'Math',
            'Mathieu'
        ];

        $lastName = [
            'White',
            'Pierre',
            'Emond',
            'Lone',
            'Blue',
            'Ford'
        ];

        for($i = 0; $i < 100; $i++){
            $flight = \App\Flight::orderBy(DB::raw('RAND()'))->first();
            DB::table('trips')->insert([
                'first_name' => $firstName[mt_rand(0, sizeof($firstName) - 1)],
                'last_name' => $lastName[mt_rand(0, sizeof($lastName) - 1)],
                'age' => rand(1, 100),
                'flight_id' => $flight->id,
            ]);
        }
    }
}
