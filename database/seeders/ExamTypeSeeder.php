<?php

namespace Database\Seeders;

use App\Models\ExamType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExamTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exams = [
            [
                'name' => 'waec',
                'display_name' => 'WAEC'
            ],
            [
                'name' => 'neco',
                'display_name' => 'NECO'
            ],
            [
                'name' => 'nabteb',
                'display_name' => 'NABTEB'
            ]
        ];

        foreach ($exams as $exam) {
            ExamType::create($exam);
        }
    }
}
