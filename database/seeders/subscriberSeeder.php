<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\subscriber;
class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <10 ; $i++) {
            subscriber::create([
                'email'          => 'randEmail'.$i.'@test.com',
            ]);
    }
    }
}
