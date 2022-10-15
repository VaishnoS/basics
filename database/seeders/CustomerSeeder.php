<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->name = "Vaishno";
        $customer->nickname = "Prakash";
        $customer->email = "Vaishnoprakash1@gmail.com";
        $customer->gender = "M";
        $customer->address = "Delhi";
        $customer->state = "UP";
        $customer->country = "India";
        $customer->password = "Ravi";
        $customer->save();
    }
}
