<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class birthreportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for ($i=0; $i < 100; $i++) {
        DB::table('birthreports')->insert([
            'patient' => Str::random(10),
            'description' => Str::random(40),
            'doctor' => Str::random(10)
        ]);
       }
    }
}
