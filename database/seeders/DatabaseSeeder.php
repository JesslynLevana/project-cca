<?php

namespace Database\Seeders;


use App\Models\MsClass;
use App\Models\MsStudent;
use App\Models\MsSubject;
use App\Models\MsTeacher;
use App\Models\SetAcademicYear;
use App\Models\SetSchedule;
use App\Models\SetStudentClass;
use App\Models\SetSubjectCoCurricularActivity;
use App\Models\SetTeacherStatus;
use App\Models\TrCoCurricularActivityStudent;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MsClassSeeder::class,
            MsStudentSeeder::class,
            MsSubjectSeeder::class,
            MsTeacherSeeder::class,
            SetAcademicYearSeeder::class,
            SetScheduleSeeder::class,
            SetStudentClassSeeder::class,
            SetSubjectCoCurricularActivitySeeder::class,
            SetTeacherStatusSeeder::class,
            UserSeeder::class,
        ]);
    }
}
