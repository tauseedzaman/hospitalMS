<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\rooms;
class roomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <5 ; $i++) {
            rooms::create([
                'department_id'   => rand(1,5),
                'roomtype'   => 'example room type '.$i,
                'available'   => rand(0,1),
            ]);

    }
    }
}
