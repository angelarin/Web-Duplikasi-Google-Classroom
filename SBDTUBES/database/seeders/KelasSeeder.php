<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('kelas')->truncate();
        \DB::table('kelas')->insert([
            [
                'id' => '1',
                'nama_kelas' => 'PKN',
                'kode_kelas' => 'pkn123',
            ],
            [
                'id' => '2',
                'nama_kelas' => 'Bahasa',
                'kode_kelas' => 'bhs123',
            ],
        ]);
    }
}