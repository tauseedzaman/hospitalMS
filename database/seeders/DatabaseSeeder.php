<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' =>'tauseed zaman',
        //     'email' =>'tauseed@test.com',
        //     'password' =>bcrypt('tauseed'),
        //     'role' =>'super admin',
        //     'is_super_admin' =>true,
        //     'created_at' =>now(),
        // ]);
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
            departmentSeeder::class,
            doctorSeeder::class,
            birthreportSeeder::class,
            operationreportSeeder::class,
            ]);

        // \App\Models\User::factory(10)->create();
    }
}
