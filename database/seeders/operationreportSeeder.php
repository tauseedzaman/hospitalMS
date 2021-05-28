<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class operationreportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) {
            DB::table('operationreports')->insert([
                'patient' => Str::random(10),
                'description' => Str::random(20),
                'doctor' => Str::random(10),
                'time' => rand(1,12).':'.rand(1,60).':'.rand(1,60).' AM',
            ]);
        }
    }
}
