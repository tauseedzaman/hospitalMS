<?php

namespace Database\Seeders;
use App\Models\employee;

use Illuminate\Database\Seeder;

class employeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gender=['Male','Female'];
        $jobes=['Doctor','Nurse','Store Man'];
        $salary=[10000,20000,12000,15000,50000];

        for ($i=0; $i <5 ; $i++) {
            employee::create([
                'name'          => 'Employee-'.$i.'',
                'email'   => 'employee'.$i.'@test.me',
                'phone'   => '+923'.rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9),
                'address'   => 'G8 street '.$i.'Islamabad pakistan',
                'gender'  => $gender[rand(0,1)],
                'job'  => $jobes[rand(0,2)],
                'salary'  => $salary[rand(0,4)]
            ]);
    }
}
}
