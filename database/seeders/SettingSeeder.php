<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'key' => 'title',
                'value' => 'Hospital Management System'
            ],
            [
                'key' => 'business_email',
                'value' => 'testing@gmail.com'
            ],
            [
                'key' => 'address',
                'value' => 'xyz, abc, 1234, Nepal'
            ],
            [
                'key' => 'business_phone',
                'value' => '+911234567890'
            ],
            [
                'key' => 'working_horse',
                'value' => '7:00 AM - 8:00 PM'
            ],
            [
                'key' => 'description',
                'value' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore um.'
            ],
            [
                'key' => 'logo',
                'value' => 'logo.png'
            ],
            [
                'key' => 'icon',
                'value' => 'icon.png'
            ],
            [
                'key' => 'facebook',
                'value' => '#'
            ],
            [
                'key' => 'twitter',
                'value' => '#'
            ],
            [
                'key' => 'instagram',
                'value' => '#'
            ],
            [
                'key' => 'linkedin',
                'value' => '#'
            ],
            [
                'key' => 'youtube',
                'value' => '#'
            ],
            [
                'key' => 'pinterest',
                'value' => '#'
            ]
        ];

        foreach ($settings as $setting) {
            \App\Models\Settings::firstOrCreate($setting);
        }
    }
}
