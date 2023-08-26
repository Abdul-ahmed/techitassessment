<?php

namespace Database\Seeders;

use App\Models\Nationality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nationalities = [
            [
                'country_name' => 'nigeria',
                'country_display_name' => 'Nigeria',
                'state_name' => 'kwara',
                'state_display_name' => 'Kwara',
            ],
            [
                'country_name' => 'nigeria',
                'country_display_name' => 'Nigeria',
                'state_name' => 'lagos',
                'state_display_name' => 'Lagos',
            ],
            [
                'country_name' => 'south_africa',
                'country_display_name' => 'South Africa',
                'state_name' => 'gauteng',
                'state_display_name' => 'Gauteng',
            ],
            [
                'country_name' => 'south_africa',
                'country_display_name' => 'South Africa',
                'state_name' => 'limpopo',
                'state_display_name' => 'Limpopo',
            ]
        ];

        foreach ($nationalities as $nationality) {
            Nationality::create($nationality);
        }
    }
}
