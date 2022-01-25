<?php

use App\Trip;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++) {
            $new_trip = new Trip();
            $new_trip->destination = $faker->city();
            $new_trip->price = $faker->numberBetween(10, 200);
            $new_trip->is_premium = $faker->boolean();
            $new_trip->is_discounted = $faker->boolean();
            $new_trip->departure_date = $faker->date();
            $new_trip->save();
        }

    }
}
