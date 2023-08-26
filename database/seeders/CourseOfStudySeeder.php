<?php

namespace Database\Seeders;

use App\Models\CourseOfStudy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CourseOfStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'uuid' => Str::uuid(),
                'name' => 'computer_science',
                'display_name' => 'Computer Science'
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'anatomy',
                'display_name' => 'Anatomy'
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'ophthalmology',
                'display_name' => 'Ophthalmology'
            ]
        ];

        foreach ($courses as $course) {
            CourseOfStudy::create($course);
        }
    }
}
