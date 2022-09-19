<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\medicine;
class medicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <12 ; $i++) {
            medicine::create([
                'price'          => rand(100,5000),
                'quantity'          => rand(5,50),
                'code' => '12345DFG'
            ]);
    }
    }
}
