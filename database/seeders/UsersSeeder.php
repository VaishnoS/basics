<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Pradeep";
        $user->email = "pradeep@gmail.com";
        $user->email_verified_at = now();
        $user->password = "Ravi";
        $user->remember_token = "nnn";
        $user->save;
    }
}
