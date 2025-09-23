<?php

namespace Database\Seeders;

use App\Models\MsClass;
use Illuminate\Database\Seeder;

class MsClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 6; $i++) {
            foreach (['A', 'B', 'C', 'D', 'E'] as $suffix) {
                MsClass::create([
                    'unit' => 'SD',
                    'class' => $i . $suffix,
                    'campus' => 'LAS'
                ]);
            }
        }

        for ($i = 1; $i <= 3; $i++) {
            MsClass::create([
                'unit' => 'SMP',
                'class' => (string) $i,
                'campus' => 'LAS'
            ]);
        }

        // LAS - SMA
        for ($i = 1; $i <= 3; $i++) {
            MsClass::create([
                'unit' => 'SMA',
                'class' => (string) $i,
                'campus' => 'LAS'
            ]);
        }

        // LSS - SD dengan A-E
        for ($i = 1; $i <= 6; $i++) {
            foreach (['A', 'B', 'C', 'D', 'E'] as $suffix) {
                MsClass::create([
                    'unit' => 'SD',
                    'class' => $i . $suffix,
                    'campus' => 'LSS'
                ]);
            }
        }

        // LSS - SMP
        for ($i = 1; $i <= 3; $i++) {
            MsClass::create([
                'unit' => 'SMP',
                'class' => (string) $i,
                'campus' => 'LSS'
            ]);
        }

        // LSS - SMA
        for ($i = 1; $i <= 3; $i++) {
            MsClass::create([
                'unit' => 'SMA',
                'class' => (string) $i,
                'campus' => 'LSS'
            ]);
        }
    }
}
