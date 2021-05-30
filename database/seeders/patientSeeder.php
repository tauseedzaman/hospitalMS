<?php

namespace Database\Seeders;

use App\Models\patient;
use Illuminate\Database\Seeder;

class patientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
    * @return void
     */
    public function run()
    {
        $groups = ['A+','A-','B+','B-','AB'];
        for ($i=0; $i <20 ; $i++) {
            patient::create([
                'name'          => 'tauseed'.$i.' zamana',
                'email'         => 'example'.$i.'@test.me',
                'phone'         => "+92123456789",
                'gender'        => "Female",
                'address'       => 'sorana'.$i.'',
                'age'       => rand(1,130),
                'bloodgroup' => $groups[rand(0,4)],
                'photo_path'    => 'patient.png',
            ]);
        }
    }
}
