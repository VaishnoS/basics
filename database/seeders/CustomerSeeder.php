<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i <= 100; $i++) {
            $customer = new Customer();
            $customer->name = $faker->name;
            $customer->nickname = $faker->lastName;
            $customer->email = $faker->email;
            $customer->gender = "M";
            $customer->address = $faker->city;
            $customer->state = $faker->state;
            $customer->country = $faker->country;
            $customer->password = $faker->password;
            $customer->save();
        }
    }
}
