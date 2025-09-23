<?php

namespace Database\Seeders;

use App\Models\SetSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;


class SetScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SetSchedule::create([
            'set_academic_year_id' => '2',
            // 'unit' => 'SD',
            'semester' => '1',
            'enrollment_start_time' => Carbon::now()->toDateTimeString(),
            'enrollment_end_time' => Carbon::now()->addDays(3)->toDateTimeString(),
        ]);

        SetSchedule::create([
            'set_academic_year_id' => '2',
            // 'unit' => 'SD',
            'semester' => '1',
            'enrollment_start_time' => Carbon::now()->toDateTimeString(),
            'enrollment_end_time' => Carbon::now()->addDays(5)->toDateTimeString(),
        ]);

        SetSchedule::create([
            'set_academic_year_id' => '2',
            // 'unit' => 'SD',
            'semester' => '1',
            'enrollment_start_time' => Carbon::now()->addDays(1)->toDateTimeString(),
            'enrollment_end_time' => Carbon::now()->addDays(4)->toDateTimeString(),
        ]);

        SetSchedule::create([
            'set_academic_year_id' => '2',
            // 'unit' => 'SD',
            'semester' => '1',
            'enrollment_start_time' => Carbon::now()->addDays(1)->toDateTimeString(),
            'enrollment_end_time' => Carbon::now()->addDays(6)->toDateTimeString(),
        ]);

        SetSchedule::create([
            'set_academic_year_id' => '2',
            // 'unit' => 'SD',
            'semester' => '1',
            'enrollment_start_time' => Carbon::now()->addDays(4)->toDateTimeString(),
            'enrollment_end_time' => Carbon::now()->addDays(6)->toDateTimeString(),
        ]);

        SetSchedule::create([
            'set_academic_year_id' => '2',
            // 'unit' => 'SD',
            'semester' => '1',
            'enrollment_start_time' => Carbon::now()->addDays(1)->toDateTimeString(),
            'enrollment_end_time' => Carbon::now()->addDays(5)->toDateTimeString(),
        ]);

        SetSchedule::create([
            'set_academic_year_id' => '2',
            // 'unit' => 'SD',
            'semester' => '1',
            'enrollment_start_time' => Carbon::now()->addDays(4)->toDateTimeString(),
            'enrollment_end_time' => Carbon::now()->addDays(15)->toDateTimeString(),
        ]);
    }
}
