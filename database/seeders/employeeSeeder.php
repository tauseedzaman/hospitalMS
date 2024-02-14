<?php

namespace Database\Seeders;
use App\Models\employee;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class employeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $positions = ["nurse", "doctor", "accountant", "pharmacist", "receptionist", "cleaner", "security", "other"];

        foreach ($positions as $position) {
            for ($i = 0; $i < 10; $i++) {
                employee::create([
                    'name' => $faker->name,
                    'email' => $faker->unique()->safeEmail,
                    'phone' => $faker->phoneNumber,
                    'salary' => $faker->randomNumber(5),
                    'address' => $faker->address,
                    'qualification' => $faker->text(20),
                    'position' => $position,
                    'status' => $faker->randomElement(["active", "inactive"]),
                    'image' => $faker->imageUrl(),
                ]);
            }
        }
}
}
