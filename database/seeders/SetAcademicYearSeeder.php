<?php

namespace Database\Seeders;

use App\Models\SetAcademicYear;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SetAcademicYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SetAcademicYear::create([
            'academic_year' => '2024/2025',
            'status' => 'inactive'
        ]);

        SetAcademicYear::create([
            'academic_year' => '2025/2026',
            'status' => 'active'
        ]);

        SetAcademicYear::create([
            'academic_year' => '2026/2027',
            'status' => 'inactive'
        ]);
    }
}
