<?php

namespace Database\Seeders;

use App\Models\MsSubject;
use Illuminate\Database\Seeder;

class MsSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MsSubject::create([
            'subject_code' => 'MNBS',
            'subject_name' => 'Mini Basket',
        ]);

        MsSubject::create([
            'subject_code' => 'CHO',
            'subject_name' => 'Choir',
        ]);

        MsSubject::create([
            'subject_code' => 'SWIM',
            'subject_name' => 'Swimming',
        ]);

        MsSubject::create([
            'subject_code' => 'SOCC',
            'subject_name' => 'Mini Soccer',
        ]);

        MsSubject::create([
            'subject_code' => 'BASE',
            'subject_name' => 'Baseball',
        ]);

        MsSubject::create([
            'subject_code' => 'SCIEN',
            'subject_name' => 'Science Creativity',
        ]);

        MsSubject::create([
            'subject_code' => 'CERA',
            'subject_name' => 'Ceramic',
        ]);

        MsSubject::create([
            'subject_code' => 'DRAW',
            'subject_name' => 'Drawing',
        ]);

        MsSubject::create([
            'subject_code' => 'TAE',
            'subject_name' => 'Taekwondo',
        ]);

        MsSubject::create([
            'subject_code' => 'DANCE',
            'subject_name' => 'Dance',
        ]);

        MsSubject::create([
            'subject_code' => 'ARTN',
            'subject_name' => 'Art and Craft',
        ]);

        MsSubject::create([
            'subject_code' => 'ENS',
            'subject_name' => 'Music Ensemble',
        ]);

        MsSubject::create([
            'subject_code' => 'ANGK',
            'subject_name' => 'Angklung',
        ]);

        MsSubject::create([
            'subject_code' => 'GMLN',
            'subject_name' => 'Gamelan',
        ]);

        MsSubject::create([
            'subject_code' => 'BDMN',
            'subject_name' => 'Badminton',
        ]);

        MsSubject::create([
            'subject_code' => 'SCCR',
            'subject_name' => 'Soccer',
        ]);

        MsSubject::create([
            'subject_code' => 'BSKT',
            'subject_name' => 'Basket',
        ]);

        MsSubject::create([
            'subject_code' => 'SCN',
            'subject_name' => 'Science',
        ]);

        MsSubject::create([
            'subject_code' => 'GTEN',
            'subject_name' => 'Guitar Ensemble',
        ]);

        MsSubject::create([
            'subject_code' => 'RBT',
            'subject_name' => 'Robotic',
        ]);

        MsSubject::create([
            'subject_code' => 'FUT',
            'subject_name' => 'Futsal',
        ]);

        MsSubject::create([
            'subject_code' => 'FNS',
            'subject_name' => 'Fun Sport',
        ]);

        MsSubject::create([
            'subject_code' => 'DRM',
            'subject_name' => 'Drama',
        ]);

        MsSubject::create([
            'subject_code' => 'ULT',
            'subject_name' => 'Ultimate Frisbee',
        ]);

        MsSubject::create([
            'subject_code' => 'TEN',
            'subject_name' => 'Tennis',
        ]);
    }
}
