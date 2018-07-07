<?php

use Illuminate\Database\Seeder;

class PlanesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maker = json_decode("[
         {
           \"FIELD1\": \"Aerospatiale (Sud Aviation) Se.210 Caravelle\",
           \"FIELD2\": \"CRV\",
           \"FIELD3\": \"S210\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Aerospatiale/Alenia ATR 42-300\",
           \"FIELD2\": \"AT4\",
           \"FIELD3\": \"AT43\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Aerospatiale/Alenia ATR 42-500\",
           \"FIELD2\": \"AT5\",
           \"FIELD3\": \"AT45\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Aerospatiale/Alenia ATR 42-600\",
           \"FIELD2\": \"ATR\",
           \"FIELD3\": \"AT46\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Aerospatiale/Alenia ATR 72\",
           \"FIELD2\": \"AT7\",
           \"FIELD3\": \"AT72\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Airbus A300\",
           \"FIELD2\": \"AB3\",
           \"FIELD3\": \"A30B\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Airbus A300-600\",
           \"FIELD2\": \"ABY\",
           \"FIELD3\": \"A306\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Airbus A310\",
           \"FIELD2\": \"310\",
           \"FIELD3\": \"A310\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Airbus A318\",
           \"FIELD2\": \"318\",
           \"FIELD3\": \"A318\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Airbus A319\",
           \"FIELD2\": \"319\",
           \"FIELD3\": \"A319\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Airbus A320\",
           \"FIELD2\": \"320\",
           \"FIELD3\": \"A320\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Airbus A321\",
           \"FIELD2\": \"321\",
           \"FIELD3\": \"A321\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Airbus A330\",
           \"FIELD2\": \"330\",
           \"FIELD3\": null,
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Airbus A330-200\",
           \"FIELD2\": \"332\",
           \"FIELD3\": \"A332\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Airbus A330-300\",
           \"FIELD2\": \"333\",
           \"FIELD3\": \"A333\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Airbus A340\",
           \"FIELD2\": \"340\",
           \"FIELD3\": null,
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Airbus A340-200\",
           \"FIELD2\": \"342\",
           \"FIELD3\": \"A342\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Airbus A340-300\",
           \"FIELD2\": \"343\",
           \"FIELD3\": \"A343\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Airbus A340-500\",
           \"FIELD2\": \"345\",
           \"FIELD3\": \"A345\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Airbus A340-600\",
           \"FIELD2\": \"346\",
           \"FIELD3\": \"A346\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Airbus A350\",
           \"FIELD2\": \"350\",
           \"FIELD3\": null,
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Airbus A350-1000\",
           \"FIELD2\": \"351\",
           \"FIELD3\": \"A35K\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Airbus A350-900\",
           \"FIELD2\": \"359\",
           \"FIELD3\": \"A359\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Airbus A380\",
           \"FIELD2\": \"380\",
           \"FIELD3\": null,
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Airbus A380-800\",
           \"FIELD2\": \"388\",
           \"FIELD3\": \"A388\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Antonov An-148\",
           \"FIELD2\": \"A81\",
           \"FIELD3\": \"A148\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Antonov An-158\",
           \"FIELD2\": \"A58\",
           \"FIELD3\": \"A158\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Antonov AN-72\",
           \"FIELD2\": \"AN7\",
           \"FIELD3\": \"AN72\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Avro RJ100\",
           \"FIELD2\": \"AR1\",
           \"FIELD3\": \"RJ1H\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Avro RJ70\",
           \"FIELD2\": \"AR7\",
           \"FIELD3\": \"RJ70\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Avro RJ85\",
           \"FIELD2\": \"AR8\",
           \"FIELD3\": \"RJ85\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"BAe 146\",
           \"FIELD2\": \"146\",
           \"FIELD3\": null,
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"BAe 146-100\",
           \"FIELD2\": \"141\",
           \"FIELD3\": \"B461\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"BAe 146-200\",
           \"FIELD2\": \"142\",
           \"FIELD3\": \"B462\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"BAe 146-300\",
           \"FIELD2\": \"143\",
           \"FIELD3\": \"B463\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Beechcraft 1900\",
           \"FIELD2\": \"BEH\",
           \"FIELD3\": \"B190\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Beechcraft Baron\",
           \"FIELD2\": null,
           \"FIELD3\": \"BE58\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Bell 212\",
           \"FIELD2\": \"BH2\",
           \"FIELD3\": \"B212\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 707\",
           \"FIELD2\": \"703\",
           \"FIELD3\": \"B703\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 717\",
           \"FIELD2\": \"717\",
           \"FIELD3\": \"B712\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 720B\",
           \"FIELD2\": \"B72\",
           \"FIELD3\": \"B720\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 727\",
           \"FIELD2\": \"727\",
           \"FIELD3\": null,
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 727-100\",
           \"FIELD2\": \"721\",
           \"FIELD3\": \"B721\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 727-200\",
           \"FIELD2\": \"722\",
           \"FIELD3\": \"B722\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 737\",
           \"FIELD2\": \"737\",
           \"FIELD3\": null,
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 737 MAX 8\",
           \"FIELD2\": \"7M8\",
           \"FIELD3\": \"B38M\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 737-200\",
           \"FIELD2\": \"732\",
           \"FIELD3\": \"B732\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 737-300\",
           \"FIELD2\": \"733\",
           \"FIELD3\": \"B733\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 737-400\",
           \"FIELD2\": \"734\",
           \"FIELD3\": \"B734\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 737-500\",
           \"FIELD2\": \"735\",
           \"FIELD3\": \"B735\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 737-600\",
           \"FIELD2\": \"736\",
           \"FIELD3\": \"B736\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 737-700\",
           \"FIELD2\": \"73G\",
           \"FIELD3\": \"B737\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 737-800\",
           \"FIELD2\": \"738\",
           \"FIELD3\": \"B738\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 737-900\",
           \"FIELD2\": \"739\",
           \"FIELD3\": \"B739\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 747\",
           \"FIELD2\": \"747\",
           \"FIELD3\": null,
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 747-100\",
           \"FIELD2\": \"741\",
           \"FIELD3\": \"B741\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 747-200\",
           \"FIELD2\": \"742\",
           \"FIELD3\": \"B742\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 747-300\",
           \"FIELD2\": \"743\",
           \"FIELD3\": \"B743\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 747-400\",
           \"FIELD2\": \"744\",
           \"FIELD3\": \"B744\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 747-8\",
           \"FIELD2\": \"748\",
           \"FIELD3\": \"B748\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 747SP\",
           \"FIELD2\": \"74L\",
           \"FIELD3\": \"B74S\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 747SR\",
           \"FIELD2\": \"74R\",
           \"FIELD3\": \"B74R\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 757\",
           \"FIELD2\": \"757\",
           \"FIELD3\": null,
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 757-200\",
           \"FIELD2\": \"752\",
           \"FIELD3\": \"B752\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 757-300\",
           \"FIELD2\": \"753\",
           \"FIELD3\": \"B753\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 767\",
           \"FIELD2\": \"767\",
           \"FIELD3\": null,
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 767-200\",
           \"FIELD2\": \"762\",
           \"FIELD3\": \"B762\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 767-300\",
           \"FIELD2\": \"763\",
           \"FIELD3\": \"B763\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 767-400\",
           \"FIELD2\": \"764\",
           \"FIELD3\": \"B764\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 777\",
           \"FIELD2\": \"777\",
           \"FIELD3\": null,
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 777-200\",
           \"FIELD2\": \"772\",
           \"FIELD3\": \"B772\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 777-200LR\",
           \"FIELD2\": \"77L\",
           \"FIELD3\": \"B77L\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 777-300\",
           \"FIELD2\": \"773\",
           \"FIELD3\": \"B773\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 777-300ER\",
           \"FIELD2\": \"77W\",
           \"FIELD3\": \"B77W\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 787\",
           \"FIELD2\": \"787\",
           \"FIELD3\": null,
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 787-10\",
           \"FIELD2\": \"78J\",
           \"FIELD3\": \"B78X\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 787-8\",
           \"FIELD2\": \"788\",
           \"FIELD3\": \"B788\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Boeing 787-9\",
           \"FIELD2\": \"789\",
           \"FIELD3\": \"B789\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Bombardier CS100\",
           \"FIELD2\": \"CS1\",
           \"FIELD3\": \"BCS1\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Bombardier CS300\",
           \"FIELD2\": \"CS3\",
           \"FIELD3\": \"BCS3\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Bombardier Global Express\",
           \"FIELD2\": \"CCX\",
           \"FIELD3\": \"GLEX\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"British Aerospace ATP\",
           \"FIELD2\": \"ATP\",
           \"FIELD3\": \"ATP\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"British Aerospace Jetstream 31\",
           \"FIELD2\": \"J31\",
           \"FIELD3\": \"JS31\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"British Aerospace Jetstream 32\",
           \"FIELD2\": \"J32\",
           \"FIELD3\": \"JS32\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"British Aerospace Jetstream 41\",
           \"FIELD2\": \"J41\",
           \"FIELD3\": \"JS41\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Canadair CL-44\",
           \"FIELD2\": \"CL4\",
           \"FIELD3\": \"CL44\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Canadair Regional Jet 100\",
           \"FIELD2\": \"CR1\",
           \"FIELD3\": \"CRJ1\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Canadair Regional Jet 1000\",
           \"FIELD2\": \"CRK\",
           \"FIELD3\": \"CRJX\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Canadair Regional Jet 200\",
           \"FIELD2\": \"CR2\",
           \"FIELD3\": \"CRJ2\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Canadair Regional Jet 700\",
           \"FIELD2\": \"CR7\",
           \"FIELD3\": \"CRJ7\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Canadair Regional Jet 900\",
           \"FIELD2\": \"CR9\",
           \"FIELD3\": \"CRJ9\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Cessna 172\",
           \"FIELD2\": \"CN1\",
           \"FIELD3\": \"C172\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Cessna 182 Skylane\",
           \"FIELD2\": \"CN1\",
           \"FIELD3\": \"C182\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Cessna 208 Caravan\",
           \"FIELD2\": \"CN1\",
           \"FIELD3\": \"C208\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Cessna 210 Centurion\",
           \"FIELD2\": \"CN1\",
           \"FIELD3\": \"C210\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Cessna Citation CJ3\",
           \"FIELD2\": \"CNJ\",
           \"FIELD3\": \"C25B\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Cessna Citation CJ4\",
           \"FIELD2\": \"CNJ\",
           \"FIELD3\": \"C25C\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Cessna Citation Excel\",
           \"FIELD2\": \"CNJ\",
           \"FIELD3\": \"C56X\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Cessna Citation I\",
           \"FIELD2\": \"CNJ\",
           \"FIELD3\": \"C500\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Cessna Citation II\",
           \"FIELD2\": \"CNJ\",
           \"FIELD3\": \"C550\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Cessna Citation Mustang\",
           \"FIELD2\": \"CNJ\",
           \"FIELD3\": \"C510\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Cessna Citation Sovereign\",
           \"FIELD2\": \"CNJ\",
           \"FIELD3\": \"C680\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Cessna Citation X\",
           \"FIELD2\": \"CNJ\",
           \"FIELD3\": \"C750\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"COMAC C-919\",
           \"FIELD2\": null,
           \"FIELD3\": \"C919\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Concorde\",
           \"FIELD2\": \"SSC\",
           \"FIELD3\": \"CONC\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Dassault Falcon 2000\",
           \"FIELD2\": \"D20\",
           \"FIELD3\": \"F2TH\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Dassault Falcon 7X\",
           \"FIELD2\": \"DF7\",
           \"FIELD3\": \"FA7X\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"De Havilland Canada DHC-4 Caribou\",
           \"FIELD2\": \"DHC\",
           \"FIELD3\": \"DHC4\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"De Havilland Canada DHC-6 Twin Otter\",
           \"FIELD2\": \"DHT\",
           \"FIELD3\": \"DHC6\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"De Havilland Canada DHC-7 Dash 7\",
           \"FIELD2\": \"DH7\",
           \"FIELD3\": \"DHC7\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"De Havilland Canada DHC-8-300 Dash 8\",
           \"FIELD2\": \"DH3\",
           \"FIELD3\": \"DH8C\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"De Havilland Canada DHC-8-400 Dash 8Q\",
           \"FIELD2\": \"DH4\",
           \"FIELD3\": \"DH8D\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Douglas DC-10\",
           \"FIELD2\": \"D10\",
           \"FIELD3\": \"DC10\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Douglas DC-3\",
           \"FIELD2\": \"D3F\",
           \"FIELD3\": \"DC3\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Douglas DC-6\",
           \"FIELD2\": \"D6F\",
           \"FIELD3\": \"DC6\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Douglas DC-9-10\",
           \"FIELD2\": \"D91\",
           \"FIELD3\": \"DC91\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Douglas DC-9-30\",
           \"FIELD2\": \"D93\",
           \"FIELD3\": \"DC93\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Douglas DC-9-40\",
           \"FIELD2\": \"D94\",
           \"FIELD3\": \"DC94\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Douglas DC-9-50\",
           \"FIELD2\": \"D95\",
           \"FIELD3\": \"DC95\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Embraer 170\",
           \"FIELD2\": \"E70\",
           \"FIELD3\": \"E170\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Embraer 190\",
           \"FIELD2\": \"E90\",
           \"FIELD3\": \"E190\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Embraer 195\",
           \"FIELD2\": \"E95\",
           \"FIELD3\": \"E195\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Embraer EMB 110 Bandeirante\",
           \"FIELD2\": \"EMB\",
           \"FIELD3\": \"E110\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Embraer EMB 120 Brasilia\",
           \"FIELD2\": \"EM2\",
           \"FIELD3\": \"E120\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Embraer Legacy 600\",
           \"FIELD2\": \"ER3\",
           \"FIELD3\": \"E35L\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Embraer Phenom 100\",
           \"FIELD2\": \"EP1\",
           \"FIELD3\": \"E50P\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Embraer Phenom 300\",
           \"FIELD2\": \"EP3\",
           \"FIELD3\": \"E55P\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Embraer RJ135\",
           \"FIELD2\": \"ER3\",
           \"FIELD3\": \"E135\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Embraer RJ140\",
           \"FIELD2\": \"ERD\",
           \"FIELD3\": \"E135\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Embraer RJ145\",
           \"FIELD2\": \"ER4\",
           \"FIELD3\": \"E145\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Fairchild Dornier 328JET\",
           \"FIELD2\": \"FRJ\",
           \"FIELD3\": \"J328\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Fairchild Dornier Do.228\",
           \"FIELD2\": \"D28\",
           \"FIELD3\": \"D228\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Fairchild Dornier Do.328\",
           \"FIELD2\": \"D38\",
           \"FIELD3\": \"D328\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Fokker 100\",
           \"FIELD2\": \"100\",
           \"FIELD3\": \"F100\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Fokker 50\",
           \"FIELD2\": \"F50\",
           \"FIELD3\": \"F50\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Fokker 70\",
           \"FIELD2\": \"F70\",
           \"FIELD3\": \"F70\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Fokker F27 Friendship\",
           \"FIELD2\": \"F27\",
           \"FIELD3\": \"F27\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Gulfstream IV\",
           \"FIELD2\": \"GJ4\",
           \"FIELD3\": \"GLF4\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Gulfstream V\",
           \"FIELD2\": \"GJ5\",
           \"FIELD3\": \"GLF5\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Harbin Yunshuji Y12\",
           \"FIELD2\": \"YN2\",
           \"FIELD3\": \"Y12\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Hawker Siddeley HS 748\",
           \"FIELD2\": \"HS7\",
           \"FIELD3\": \"A748\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Ilyushin IL18\",
           \"FIELD2\": \"IL8\",
           \"FIELD3\": \"IL18\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Ilyushin IL62\",
           \"FIELD2\": \"IL6\",
           \"FIELD3\": \"IL62\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Ilyushin IL76\",
           \"FIELD2\": \"IL7\",
           \"FIELD3\": \"IL76\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Ilyushin IL86\",
           \"FIELD2\": \"ILW\",
           \"FIELD3\": \"IL86\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Ilyushin IL96\",
           \"FIELD2\": \"I93\",
           \"FIELD3\": \"IL96\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Learjet 35\",
           \"FIELD2\": \"LRJ\",
           \"FIELD3\": \"LJ35\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Learjet 60\",
           \"FIELD2\": \"LRJ\",
           \"FIELD3\": \"LJ60\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Lockheed L-188 Electra\",
           \"FIELD2\": \"LOE\",
           \"FIELD3\": \"L188\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"McDonnell Douglas MD-11\",
           \"FIELD2\": \"M11\",
           \"FIELD3\": \"MD11\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"McDonnell Douglas MD-81\",
           \"FIELD2\": \"M81\",
           \"FIELD3\": \"MD81\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"McDonnell Douglas MD-82\",
           \"FIELD2\": \"M82\",
           \"FIELD3\": \"MD82\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"McDonnell Douglas MD-83\",
           \"FIELD2\": \"M83\",
           \"FIELD3\": \"MD83\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"McDonnell Douglas MD-87\",
           \"FIELD2\": \"M87\",
           \"FIELD3\": \"MD87\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"McDonnell Douglas MD-88\",
           \"FIELD2\": \"M88\",
           \"FIELD3\": \"MD88\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"McDonnell Douglas MD-90\",
           \"FIELD2\": \"M90\",
           \"FIELD3\": \"MD90\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"NAMC YS-11\",
           \"FIELD2\": \"YS1\",
           \"FIELD3\": \"YS11\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Partenavia P.68\",
           \"FIELD2\": \"PN6\",
           \"FIELD3\": \"P68\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Pilatus Britten-Norman BN-2A Mk III Trislander\",
           \"FIELD2\": \"BNT\",
           \"FIELD3\": \"TRIS\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Pilatus Britten-Norman BN-2A/B Islander\",
           \"FIELD2\": \"BNI\",
           \"FIELD3\": \"BN2P\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Pilatus PC-12\",
           \"FIELD2\": \"PL2\",
           \"FIELD3\": \"PC12\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Pilatus PC-6 Turbo Porter\",
           \"FIELD2\": \"PL6\",
           \"FIELD3\": \"PC6T\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Piper PA-31 Navajo\",
           \"FIELD2\": \"PA2\",
           \"FIELD3\": \"PA31\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Saab 2000\",
           \"FIELD2\": \"S20\",
           \"FIELD3\": \"SB20\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Saab SF340A/B\",
           \"FIELD2\": \"SF3\",
           \"FIELD3\": \"SF34\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Shorts SD.360\",
           \"FIELD2\": \"SH6\",
           \"FIELD3\": \"SH36\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Sikorsky S-61\",
           \"FIELD2\": \"S61\",
           \"FIELD3\": \"S61\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Sikorsky S-76\",
           \"FIELD2\": \"S76\",
           \"FIELD3\": \"S76\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Sukhoi Superjet 100-95\",
           \"FIELD2\": \"SU9\",
           \"FIELD3\": \"SU95\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Tupolev Tu-134\",
           \"FIELD2\": \"TU3\",
           \"FIELD3\": \"T134\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Tupolev Tu-144\",
           \"FIELD2\": null,
           \"FIELD3\": \"T144\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Tupolev Tu-154\",
           \"FIELD2\": \"TU5\",
           \"FIELD3\": \"T154\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Tupolev Tu-204\",
           \"FIELD2\": \"T20\",
           \"FIELD3\": \"T204\",
           \"FIELD4\": \"\"
         },
         {
           \"FIELD1\": \"Yakovlev Yak-40\",
           \"FIELD2\": \"YK4\",
           \"FIELD3\": \"YK40\",
           \"FIELD4\": \"\"
         }
        ]");
        foreach ($maker as $m) {
            DB::table('planes')->insert([
                'name' => $m->FIELD1,
                'short_name_1' => $m->FIELD2,
                'short_name_2' => $m->FIELD3,
                'max_passenger' => rand(200, 300)
            ]);
        }
    }
}
