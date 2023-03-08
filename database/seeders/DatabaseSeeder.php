<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Storage::disk('public')->put('patient.png', config('app.url').'images/patient.png');
        Storage::disk('public')->put('doctor.png', config('app.url').'images/doctor.png');

        User::create([
            'name' =>'tauseed zaman',
            'email' =>'tauseed@test.com',
            'password' =>bcrypt('tauseed'),
            'role' =>'super admin',
            'is_super_admin' =>true,
            'created_at' =>now(),
        ]);
        // User::create([
        //     'name' =>'store employeer',
        //     'email' =>'storeemployeer@test.com',
        //     'password' =>bcrypt('storeemployeer'),
        //     'role' =>'store man',
        //     'created_at' =>now(),
        // ]);
        // User::create([
        //     'name' =>'doctor',
        //     'email' =>'doctor@test.com',
        //     'password' =>bcrypt('doctor'),
        //     'role' =>'doctor',
        //     'created_at' =>now(),
        // ]);
        // User::create([
        //     'name' =>'zaman',
        //     'email' =>'zaman@test.com',
        //     'password' =>bcrypt('zaman'),
        //     'role' =>'PA',
        //     'created_at' =>now(),
        // ]);

        $this->call([
            employeeSeeder::class,
            patientSeeder::class,
            blockSeeder::class,
            departmentSeeder::class,
            HodSeeder::class,
            doctorSeeder::class,
            nurseSeeder::class,
            birthreportSeeder::class,
            operationreportSeeder::class,
            SubscriberSeeder::class,
            ContactSeeder::class,
            roomSeeder::class,
            bedsSeeder::class,
            billSeeder::class,
            medicineSeeder::class,
            ]);

        // \App\Models\User::factory(10)->create();
    }
}
