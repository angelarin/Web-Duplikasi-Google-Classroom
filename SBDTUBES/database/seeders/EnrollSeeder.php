<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EnrollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('enrollments')->truncate();
        \DB::table('enrollments')->insert([
            [
                'id' => '1',
                'id_user' => '1',
                'id_kelas' => '1',
                'status' => 'guru',
            ],
            [
                'id' => '2',
                'id_user' => '2',
                'id_kelas' => '1',
                'status' => 'guru',
            ],
            [
                'id' => '3',
                'id_user' => '3',
                'id_kelas' => '1',
                'status' => 'guru',
            ],
            [
                'id' => '4',
                'id_user' => '4',
                'id_kelas' => '1',
                'status' => 'siswa',
            ],
            [
                'id' => '5',
                'id_user' => '5',
                'id_kelas' => '1',
                'status' => 'siswa',
            ],
            [
                'id' => '6',
                'id_user' => '6',
                'id_kelas' => '1',
                'status' => 'siswa',
            ],
            [
                'id' => '7',
                'id_user' => '1',
                'id_kelas' => '2',
                'status' => 'siswa',
            ],
            [
                'id' => '8',
                'id_user' => '2',
                'id_kelas' => '2',
                'status' => 'siswa',
            ],
            [
                'id' => '9',
                'id_user' => '3',
                'id_kelas' => '2',
                'status' => 'siswa',
            ],
            [
                'id' => '10',
                'id_user' => '4',
                'id_kelas' => '2',
                'status' => 'guru',
            ],
            [
                'id' => '11',
                'id_user' => '5',
                'id_kelas' => '2',
                'status' => 'guru',
            ],
            [
                'id' => '126',
                'id_user' => '6',
                'id_kelas' => '2',
                'status' => 'guru',
            ],
        ]);
    }
}