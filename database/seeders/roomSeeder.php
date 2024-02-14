<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\rooms;
use Faker\Factory as Faker;

class roomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $departments = \App\Models\Department::all()->pluck('id')->toArray(); // Assuming you have a Department model

        for ($i = 0; $i < 8; $i++) { // Creating 50 rooms
            rooms::create([
                'department_id' => $faker->randomElement($departments),
                'status' => $faker->randomElement(['available', 'occupied', 'maintenance']),
                'type' => $faker->randomElement(['ward', 'private', 'semi-private', 'general']),
            ]);
        }
    }
}
