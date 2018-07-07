## About Trip Builder

Trip Build is a web service (API) that servers as the engine for multiple client

- It can return multiple Airports
- It can return multiple Planes
- It can return mutiple Airlines
- You can book your flight via the API

## Requirements:
- PHP 5.6
- MySQL
- Make ure yo update the `.env.example` to `.env` and edit the file with your configuration
- Installation instruction: https://laravel.com/docs/5.4

## How to install the API
- You first clone this repo into your server.
- Run `composer install`
- Run `cp .env.example .env`
- Edit `.env`
- Make sure that your virtual host configure on your server look for the `public` folder of this project.
- Create the database you entered in the `.env` file.
- To create the table run `php artisan migrate`
- To insert data into the database run `php artisan db:seed --class=RunAllSeeder`
- The project should be running

## To view the document you can navigate to 
- https://{DOMAIN}/docs/api/

If you need to regenerate the php documentation you can execute that `php phpDocumentor.phar -d ./app/ -t public/docs/api` 

## How to use the Web Service once the app is running
- First you need to create the database: `php artisan migrate`
- Second you need to seed your database with the data `php artisan db:seed --class=RunAllSeeder`


## How do I access it?
To access the app you will need to navigate to `https://{DOMAIN}/api/`. Once you reach there you'll be able to use the 
API documentation to do any request would you like to do.


## Possible API call
- `https://{DOMAIN}/api/` will check if the API is up
- `https://{DOMAIN}/api/airport/name/{name}` will return a list of airport with the name you asked
- `https://{DOMAIN}/api/airport/country/{country}` will return a list of airport with the country you asked
- `https://{DOMAIN}/api/airport/all` will return all the airport
- `https://{DOMAIN}/api/plane/all` Will return all the plane that we have in our system
- `https://{DOMAIN}/api/plane/minimum_passenger/{amount}` Will return all the plane that can carry at the minimum 
this amount of passenger
- `https://{DOMAIN}/api/flight/all` Will return all the flight that we have in our system
- `https://{DOMAIN}/api/flight/insert/{departure}/{arrival}/{plane_id}/{date_departure}/{date_arrival}/{airline_id}` 
Will insert a new flight into our system
- `https://{DOMAIN}/api/flight/find/airline/{airline_id}` Will return all the flight from that specific airline
- `https://{DOMAIN}/api/flight/delete/{id}` Will delete the flight
- `https://{DOMAIN}/api/airline/all` Will return all the airline
- `https://{DOMAIN}/api/airline/name/{name}` Will return all the airline with that specific name
- `https://{DOMAIN}/api/trip/all` Will return all the trip
- `https://{DOMAIN}/api/trip/find/{id}` Will return the trip ID specified
- `https://{DOMAIN}/api/trip/insert/{first_name}/{last_name}/{age}/{flight_id}` Will insert a new row in trip
- `https://{DOMAIN}/api/trip/flight/{trip_id}` Will return the flight of that trip