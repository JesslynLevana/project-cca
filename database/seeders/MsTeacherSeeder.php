<?php

namespace Database\Seeders;

use App\Models\MsTeacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MsTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MsTeacher::create([
            'teacher_id' => 'T0001',
            'campus' => 'LAS',
            'name' => 'Kevin Hartanto, S.Pd',
            'phone' => '081234567890',
            'address' => 'Jl. Merpati Raya No.12, Ciputat, Tangsel',
        ]);

        MsTeacher::create([
            'teacher_id' => 'T0002',
            'campus' => 'LAS',
            'name' => 'Michelle Anggraini, S.Pd., M.Pd.',
            'phone' => '082145678901',
            'address' => 'Jl. Boulevard Gading Serpong, Tangerang',
        ]);

        MsTeacher::create([
            'teacher_id' => 'T0003',
            'campus' => 'LAS',
            'name' => 'Leonardo Wijaya, S.Pd.',
            'phone' => '083198765432',
            'address' => 'Jl. H. Sa\'aba, Pondok Aren, Tangsel',
        ]);

        MsTeacher::create([
            'teacher_id' => 'T0004',
            'campus' => 'LAS',
            'name' => 'Jessica Halim, S.Pd.',
            'phone' => '085267849301',
            'address' => 'Jl. Dahlia II No.8, Ciledug, Tangerang',
        ]);

        MsTeacher::create([
            'teacher_id' => 'T0005',
            'campus' => 'LAS',
            'name' => 'Adrian Pratama, S.Pd., M.Pd.',
            'phone' => '088812345678',
            'address' => 'Jl. Pesanggrahan, Kembangan, Jakbar',
        ]);

        MsTeacher::create([
            'teacher_id' => 'T0006',
            'campus' => 'LAS',
            'name' => 'Natalie Santoso, S.Pd.',
            'phone' => '081376541209',
            'address' => 'Jl. Letnan Sutopo, BSD, Tangsel',
        ]);

        MsTeacher::create([
            'teacher_id' => 'T0007',
            'campus' => 'LAS',
            'name' => 'Felix Gunawan, S.Pd.',
            'phone' => '082176543210',
            'address' => 'Jl. Palem Raja, Karang Tengah, Tangerang',
        ]);

        MsTeacher::create([
            'teacher_id' => 'T0008',
            'campus' => 'LAS',
            'name' => 'Stephanie Liu, S.Pd.',
            'phone' => '089901234567',
            'address' => 'Jl. Panjang Arteri, Kebon Jeruk, Jakbar',
        ]);

        MsTeacher::create([
            'teacher_id' => 'T0009',
            'campus' => 'LAS',
            'name' => 'Albert Salim, S.Pd.',
            'phone' => '087865432109',
            'address' => 'Jl. Siliwangi No.21, Pamulang, Tangsel',
        ]);

        MsTeacher::create([
            'teacher_id' => 'T0010',
            'campus' => 'LAS',
            'name' => 'Caroline Lim, S.Pd., M.Pd.',
            'phone' => '081298765432',
            'address' => 'Jl. Taman Royal, Cipondoh, Tangerang',
        ]);

        MsTeacher::create([
            'teacher_id' => 'T0011',
            'campus' => 'LAS',
            'name' => 'Nicholas Chandra, S.Pd.',
            'phone' => '082334455667',
            'address' => 'Jl. Raya Joglo, Kembangan, Jakbar',
        ]);

        MsTeacher::create([
            'teacher_id' => 'T0012',
            'campus' => 'LAS',
            'name' => 'Vivian Ang, S.Pd.',
            'phone' => '085612349876',
            'address' => 'Jl. Graha Raya, Bintaro, Tangsel',
        ]);

        MsTeacher::create([
            'teacher_id' => 'T0013',
            'campus' => 'LAS',
            'name' => 'Brandon Kusuma, S.Pd., M.Pd.',
            'phone' => '088812301234',
            'address' => 'Jl. Taman Aries, Meruya Utara, Jakbar',
        ]);

        MsTeacher::create([
            'teacher_id' => 'T0014',
            'campus' => 'LAS',
            'name' => 'Monica Tan, S.Pd.',
            'phone' => '083356789012',
            'address' => 'Jl. M. Toha, Batuceper, Tangerang',
        ]);

        MsTeacher::create([
            'teacher_id' => 'T0015',
            'campus' => 'LAS',
            'name' => 'Ethan Tjandra, S.Pd.',
            'phone' => '081112223333',
            'address' => 'Jl. WR Supratman, Pondok Cabe, Tangsel',
        ]);

        // LSS
        MsTeacher::create([
            'teacher_id' => 'T0016',
            'campus' => 'LSS',
            'name' => 'Rachel Gunawan, S.Pd.',
            'phone' => '081223344556',
            'address' => 'Jl. Kesehatan Raya, Kembangan, Jakbar',
        ]);

        MsTeacher::create([
            'teacher_id' => 'T0017',
            'campus' => 'LSS',
            'name' => 'Daniel Setiawan, S.Pd., M.Pd.',
            'phone' => '082212223333',
            'address' => 'Jl. KH Hasyim Ashari, Cipondoh, Tangerang',
        ]);

        MsTeacher::create([
            'teacher_id' => 'T0018',
            'campus' => 'LSS',
            'name' => 'Angelina Wijaya, S.Pd.',
            'phone' => '081998877665',
            'address' => 'Jl. Taman Surya, Kalideres, Jakbar',
        ]);

        MsTeacher::create([
            'teacher_id' => 'T0019',
            'campus' => 'LSS',
            'name' => 'Jonathan Halim, S.Pd.',
            'phone' => '083311224455',
            'address' => 'Jl. Raya Pondok Betung, Tangsel',
        ]);

        MsTeacher::create([
            'teacher_id' => 'T0020',
            'campus' => 'LSS',
            'name' => 'Clarissa Gunarto, S.Pd.',
            'phone' => '084411223344',
            'address' => 'Jl. Puri Beta, Larangan, Tangerang',
        ]);

        MsTeacher::create([
            'teacher_id' => 'T0021',
            'campus' => 'LSS',
            'name' => 'William Tanoto, S.Pd., M.Pd.',
            'phone' => '087711223344',
            'address' => 'Jl. Kebon Jeruk Raya, Jakbar',
        ]);

        MsTeacher::create([
            'teacher_id' => 'T0022',
            'campus' => 'LSS',
            'name' => 'Yvonne Lestari, S.Pd.',
            'phone' => '089911223344',
            'address' => 'Jl. BSD Boulevard, Tangsel',
        ]);

        MsTeacher::create([
            'teacher_id' => 'T0023',
            'campus' => 'LSS',
            'name' => 'Ivan Tanuwijaya, S.Pd.',
            'phone' => '085511223344',
            'address' => 'Jl. Cendrawasih, Bintaro, Tangsel',
        ]);

        MsTeacher::create([
            'teacher_id' => 'T0024',
            'campus' => 'LSS',
            'name' => 'Michelle Kristanto, S.Pd.',
            'phone' => '081711223344',
            'address' => 'Jl. Tanjung Duren, Jakbar',
        ]);

        MsTeacher::create([
            'teacher_id' => 'T0025',
            'campus' => 'LSS',
            'name' => 'Ryan Hartawan, S.Pd.',
            'phone' => '082511223344',
            'address' => 'Jl. Permata Hijau, Jakbar',
        ]);
    }
}
