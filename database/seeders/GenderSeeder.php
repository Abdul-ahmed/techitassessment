<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genders = [
            [
                'name' => 'male',
                'display_name' => 'Male'
            ],
            [
                'name' => 'female',
                'display_name' => 'Female'
            ],
            [
                'name' => 'transgender',
                'display_name' => 'Transgender'
            ]
        ];

        foreach ($genders as $gender) {
            Gender::create($gender);
        }
    }
}
