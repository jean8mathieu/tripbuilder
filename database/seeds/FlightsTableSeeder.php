<?php

use Illuminate\Database\Seeder;

class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 100; $i++) {
            $date = $this->randomDate('2000-01-01 00:00:00', '2018-07-07 00:00:00');
            $day = rand(1,2);
            $date2 = date('Y-m-d H:i:s', strtotime("{$date} + {$day} day"));
            DB::table('flights')->insert([
                'departure' => rand(1, 3552),
                'arrival' => rand(1, 3552),
                'plane_id' => rand(1, 174),
                'date_departure' => $date,
                'date_arrival' => $date2,
                'airline_id' => rand(1, 802),

            ]);
        }
    }

    // Find a randomDate between $start_date and $end_date
    function randomDate($start_date, $end_date)
    {
        // Convert to timetamps
        $min = strtotime($start_date);
        $max = strtotime($end_date);

        // Generate random number using above bounds
        $val = rand($min, $max);

        // Convert back to desired date format
        return date('Y-m-d H:i:s', $val);
    }
}
