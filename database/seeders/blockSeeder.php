<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\block;
class blockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i <5 ; $i++) {
            block::create([
                'blockname'          => $faker->name(),
                'blockcode'          => rand(100,500),
            ]);
    }
}
}
