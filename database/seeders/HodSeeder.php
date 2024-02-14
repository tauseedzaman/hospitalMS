<?php

namespace Database\Seeders;

use App\Models\doctor;
use Illuminate\Database\Seeder;
use App\Models\hod;

class HodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        hod::create([
            'doctor_id'    => doctor::first()->id
        ]);
        hod::create([
            'doctor_id'    => doctor::latest()->first()->id
        ]);
    }
}
