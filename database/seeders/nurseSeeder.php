<?php

namespace Database\Seeders;
use App\Models\nurse;
use Illuminate\Database\Seeder;

class nurseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gender=['Male','Female'];
        $qlp=['BSN','MSN',"blaa",'Bla'];
        $position=['Main area','Side Room','Specoal Department','blaa','blaaaa','blabla'];

        for ($i=0; $i <5 ; $i++) {
            nurse::create([
                'name'          => 'Nurse-'.$i.'',
                'email'   => 'nurse'.$i.'@gmail.com',
                'phone'   => '+923'.rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9),
                'address'   => 'G8 street '.$i.'Islamabad pakistan',
                'qualification'  => $qlp[rand(0,3)],
                'photo_path'  => env('APP_URL').'images/'. 'nurse.png',
                'gender'  => $gender[rand(0,1)],
                'registered'  => rand(0,1),
                'position'  => $position[rand(0,5)]
            ]);

    }
}
}
