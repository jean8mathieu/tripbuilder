<?php

use Illuminate\Database\Seeder;

class AirportsTableSeeder extends Seeder
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
            CURLOPT_URL => 'https://gist.githubusercontent.com/tdreyno/4278655/raw/7b0762c09b519f40397e4c3e100b097d861f5588/airports.json',
            CURLOPT_RETURNTRANSFER => true
        );

        // apply those options
        curl_setopt_array($ch, $optArray);

        // execute request and get response
        $result = json_decode(curl_exec($ch));

        foreach($result as $r){
            if (count(\App\Airport::query()->where('name', '=', $r->name)->get()) == 0) {
                DB::table('airports')->insert([
                    'code' => $r->code,
                    'lat' => $r->lat,
                    'lon' => $r->lon,
                    'name' => $r->name,
                    'city' => (!is_null($r->city) ? $r->city : 'Unknown'),
                    'state' => (!is_null($r->state) ? $r->state : 'Unknown'),
                    'country' => (!is_null($r->country) ? $r->country : "Unknown"),
                    'woeid' => $r->woeid,
                    'tz' => $r->tz,
                    'phone' => $r->phone,
                    'email' => $r->email,
                    'elev' => $r->elev,
                    'icao' => $r->icao
                ]);
            }
        }
    }
}
