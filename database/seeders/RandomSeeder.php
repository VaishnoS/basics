<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Random;
use Faker\Factory as Faker;

class RandomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i <= 10; $i++) {
            $random = new Random();
            $random->name = $faker->name;
            $random->email = $faker->email;
            $random->dob = $faker->date;
            $random->address = $faker->address;
            $random->state = $faker->state;
            $random->country = $faker->country;
            $random->save();
        }
    }
}
