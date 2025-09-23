<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SetStudentClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = DB::table('ms_students')->pluck('id')->toArray();
        $classes  = DB::table('ms_classes')->pluck('id')->toArray();

        $insertData = [];
        $classCount = count($classes);
        $i = 0;

        foreach ($students as $studentId) {
            // Round robin: jalan terus muter-muter di array class
            $classId = $classes[$i % $classCount];

            $insertData[] = [
                'ms_student_id'       => $studentId,
                'ms_class_id'         => $classId,
                'set_academic_year_id' => 2,
                'created_at'          => now(),
                'updated_at'          => now(),
            ];

            $i++;
        }

        DB::table('set_student_classes')->insert($insertData);
    }
}
