<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tasks;
use Faker\Factory as Faker;

class TasksSeeder extends Seeder
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
            $task = new Tasks();
            $task->task1 = $faker->name;
            $task->task2 = $faker->address;
            $task->task3 = $faker->state;
            $task->task4 = $faker->country;
            $task->task5 = $faker->date;
            $task->task6 = $faker->paragraph;
            $task->save();
        }
    }
}
