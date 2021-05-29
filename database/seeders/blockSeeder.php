<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        for ($i=0; $i <5 ; $i++) {
            block::create([
                'blockfloor'          => rand(1,8),
                'blockcode'          => rand(100,500),
            ]);
    }
}
}
