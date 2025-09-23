<?php

namespace Database\Seeders;

use App\Models\TrCoCurricularActivityStudent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrCoCurricularActivityStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjectIds = range(1, 72);

        for ($i = 1; $i <= 100; $i++) {
            TrCoCurricularActivityStudent::create([
                'ms_student_id' => $i,
                'set_subject_co_curricular_activity_id' => $subjectIds[array_rand($subjectIds)],
                'set_academic_year_id' => '2'
            ]);
        }
    }
}