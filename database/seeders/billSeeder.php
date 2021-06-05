<?php

namespace Database\Seeders;
use App\Models\bill;
use Illuminate\Database\Seeder;

class billSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <12 ; $i++) {
            bill::create([
                'patients_id'          => rand(1,5),
                'amount'          => rand(100,5000),
                'payed' => rand(0,1)
            ]);
    }
    }
}
