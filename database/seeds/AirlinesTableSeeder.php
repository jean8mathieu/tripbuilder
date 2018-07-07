<?php

use Illuminate\Database\Seeder;

class AirlinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // init curl object
        $ch = curl_init();

        // define options
        $optArray = array(
            CURLOPT_URL => 'https://raw.githubusercontent.com/BesrourMS/Airlines/master/airlines.json',
            CURLOPT_RETURNTRANSFER => true
        );

        // apply those options
        curl_setopt_array($ch, $optArray);

        // execute request and get response
        $result = json_decode(curl_exec($ch));

        foreach ($result as $r) {

            if (count(\App\Airline::query()->where('name', '=', $r->name)->get()) == 0) {
                $airline = new \App\Airline;
                $airline->iata = $r->iata;
                $airline->name = $r->name;
                $airline->save();
            }
        }
    }
}
