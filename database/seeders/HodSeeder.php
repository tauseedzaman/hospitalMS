<?php

namespace Database\Seeders;

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
        for ($i=1; $i <3 ; $i++) {
            hod::create([
                'doctor_id'    => $i,
            ]);
    }
}
}
