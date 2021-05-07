<?php

namespace Database\Seeders;

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
        $this->call([
            patientSeeder::class,
            departmentSeeder::class,
            doctorSeeder::class,
            birthreportSeeder::class,
            operationreportSeeder::class,
            ]);

        // \App\Models\User::factory(10)->create();
    }
}
