<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\contact;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <10 ; $i++) {
            contact::create([
                'name'          => 'mr-Name'.$i.'baba',
                'email'          => 'randEmail'.$i.'@test.com',
                'phone'   => '+923'.rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9),
                'subject'          => 'test subject-'.$i,
                'message'          => 'a simple test message from users . message number '.$i,
            ]);
    }
    }
}
