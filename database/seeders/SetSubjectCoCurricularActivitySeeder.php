<?php

namespace Database\Seeders;

use App\Models\SetSubjectCoCurricularActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SetSubjectCoCurricularActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($classId = 1; $classId <= 72; $classId++) {
            // Kalau classId 1–5 → insert 5 rows
            // SLAS0001 Kevin Ong
            // SLAS0002 Michelle Tan
            // SLAS0003 Bryan Lim
            // SLAS0004 Angelica Lee
            // SLAS0005 Daniel Chandra

            // T0009 Albert Salim, S.Pd
            // T0025 Ryan Hartawan, S.Pd
            if ($classId >= 1 && $classId <= 5) {
                for ($i = 0; $i < 5; $i++) {
                    SetSubjectCoCurricularActivity::create([
                        'ms_subject_id'        => rand(1, 25),
                        'set_academic_year_id' => 2,
                        'set_schedule_id'      => rand(1, 7),
                        'ms_teacher_id'        => rand(1, 25),
                        'ms_class_id'          => $classId,
                        'quota'                => rand(3, 7),
                    ]);
                }
            } else {
                SetSubjectCoCurricularActivity::create([
                    'ms_subject_id'        => rand(1, 25),
                    'set_academic_year_id' => 2,
                    'set_schedule_id'      => rand(1, 7),
                    'ms_teacher_id'        => rand(1, 25),
                    'ms_class_id'          => $classId,
                    'quota'                => rand(3, 7),
                ]);
            }
        }
    }
}
