<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['user_id' => 'SLAS0001', 'name' => 'Kevin Ong', 'level' => 2, 'status' => 'active', 'password' => '123123'],
            ['user_id' => 'SLAS0002', 'name' => 'Michelle Tan', 'level' => 2, 'status' => 'active', 'password' => '123123'],
            ['user_id' => 'SLAS0003', 'name' => 'Bryan Lim', 'level' => 2, 'status' => 'active', 'password' => '123123'],
            ['user_id' => 'SLAS0004', 'name' => 'Angelica Lee', 'level' => 2, 'status' => 'active', 'password' => '123123'],
            ['user_id' => 'SLAS0005', 'name' => 'Daniel Chandra', 'level' => 2, 'status' => 'active', 'password' => '123123'],
            ['user_id' => 'SLAS0006', 'name' => 'Stephanie Liem', 'level' => 2, 'status' => 'active', 'password' => '123123'],
            ['user_id' => 'SLAS0007', 'name' => 'Jonathan Wong', 'level' => 2, 'status' => 'active', 'password' => '123123'],
            ['user_id' => 'SLAS0008', 'name' => 'Cynthia Hartono', 'level' => 2, 'status' => 'active', 'password' => '123123'],
            ['user_id' => 'SLAS0009', 'name' => 'Nicholas Goh', 'level' => 2, 'status' => 'active', 'password' => '123123'],
            ['user_id' => 'SLAS0010', 'name' => 'Patricia Halim', 'level' => 2, 'status' => 'active', 'password' => '123123'],
            ['user_id' => 'T0001', 'name' => 'Kevin Hartanto, S.Pd.', 'level' => 3, 'status' => 'active', 'password' => '123123'],
            ['user_id' => 'T0002', 'name' => 'Michelle Anggraini, S.Pd., M.Pd.', 'level' => 3, 'status' => 'active', 'password' => '123123'],
            ['user_id' => 'T0003', 'name' => 'Leonardo Wijaya, S.Pd.', 'level' => 3, 'status' => 'active', 'password' => '123123'],
            ['user_id' => 'T0004', 'name' => 'Jessica Halim, S.Pd.', 'level' => 3, 'status' => 'active', 'password' => '123123'],
            ['user_id' => 'T0005', 'name' => 'Adrian Pratama, S.Pd., M.Pd.', 'level' => 3, 'status' => 'active', 'password' => '123123'],
            ['user_id' => 'T0006', 'name' => 'Natalie Santoso, S.Pd.', 'level' => 3, 'status' => 'active', 'password' => '123123'],
        ];
        User::insert($users);
    }
}
