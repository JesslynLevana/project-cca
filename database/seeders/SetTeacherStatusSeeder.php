<?php

namespace Database\Seeders;

use App\Models\SetTeacherStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SetTeacherStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $periods = [
            '2023/2026', '2024/2027', '2023/2027', '2024/2026', '2025/2026',
            '2024/2027', '2024/2026', '2023/2026', '2025/2027', '2024/2026',
            '2023/2027', '2024/2027', '2023/2026', '2024/2026', '2025/2027',
            '2023/2027', '2024/2026', '2023/2026', '2025/2026', '2024/2027',
            '2023/2026', '2024/2026', '2023/2027', '2025/2027', '2024/2026',
        ];

        foreach (range(1, 25) as $i) {
            SetTeacherStatus::create([
                'ms_teacher_id' => $i,
                'active_period' => $periods[$i - 1],
            ]);
        }
    }
}