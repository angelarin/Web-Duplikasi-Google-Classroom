<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IsipostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('isiposts')->truncate();
        \DB::table('isiposts')->insert([
            [
                'id' => '1',
                'id_author' => '2',
                'id_kelas' => '1',
                'judul' => 'Materi 1 Kelas PKN',
                'isi' => 'Nam sollicitudin eros nec sem maximus luctus. Duis euismod ligula quis venenatis interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at tortor et metus volutpat tempus. Nunc dui mauris, sodales id rhoncus eget, hendrerit nec mi. Quisque pharetra dui a tempus rhoncus. Morbi ut magna neque. In sit amet lobortis eros, ut maximus nisi. Proin viverra magna eget diam feugiat feugiat. Sed blandit massa in mollis ullamcorper. Ut placerat libero urna, ac varius justo dictum commodo. Duis luctus fermentum feugiat. Aenean faucibus, mi vel cursus molestie, leo magna venenatis nisl, et imperdiet leo neque ut tortor.',
                'jenis' => 'materi',
            ],
            [
                'id' => '2',
                'id_author' => '2',
                'id_kelas' => '1',
                'judul' => 'Tugas 1 Kelas PKN',
                'isi' => 'Nam sollicitudin eros nec sem maximus luctus. Duis euismod ligula quis venenatis interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at tortor et metus volutpat tempus. Nunc dui mauris, sodales id rhoncus eget, hendrerit nec mi. Quisque pharetra dui a tempus rhoncus. Morbi ut magna neque. In sit amet lobortis eros, ut maximus nisi. Proin viverra magna eget diam feugiat feugiat. Sed blandit massa in mollis ullamcorper. Ut placerat libero urna, ac varius justo dictum commodo. Duis luctus fermentum feugiat. Aenean faucibus, mi vel cursus molestie, leo magna venenatis nisl, et imperdiet leo neque ut tortor.',
                'jenis' => 'tugas',
            ],
            [
                'id' => '3',
                'id_author' => '2',
                'id_kelas' => '1',
                'judul' => 'Absen 1 Kelas PKN',
                'isi' => 'Nam sollicitudin eros nec sem maximus luctus. Duis euismod ligula quis venenatis interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at tortor et metus volutpat tempus. Nunc dui mauris, sodales id rhoncus eget, hendrerit nec mi. Quisque pharetra dui a tempus rhoncus. Morbi ut magna neque. In sit amet lobortis eros, ut maximus nisi. Proin viverra magna eget diam feugiat feugiat. Sed blandit massa in mollis ullamcorper. Ut placerat libero urna, ac varius justo dictum commodo. Duis luctus fermentum feugiat. Aenean faucibus, mi vel cursus molestie, leo magna venenatis nisl, et imperdiet leo neque ut tortor.',
                'jenis' => 'isian',
            ],
            [
                'id' => '4',
                'id_author' => '6',
                'id_kelas' => '2',
                'judul' => 'Materi 1 Kelas Bahasa',
                'isi' => 'Nam sollicitudin eros nec sem maximus luctus. Duis euismod ligula quis venenatis interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at tortor et metus volutpat tempus. Nunc dui mauris, sodales id rhoncus eget, hendrerit nec mi. Quisque pharetra dui a tempus rhoncus. Morbi ut magna neque. In sit amet lobortis eros, ut maximus nisi. Proin viverra magna eget diam feugiat feugiat. Sed blandit massa in mollis ullamcorper. Ut placerat libero urna, ac varius justo dictum commodo. Duis luctus fermentum feugiat. Aenean faucibus, mi vel cursus molestie, leo magna venenatis nisl, et imperdiet leo neque ut tortor.',
                'jenis' => 'materi',
            ],
            [
                'id' => '5',
                'id_author' => '6',
                'id_kelas' => '2',
                'judul' => 'Tugas 1 Kelas Bahasa',
                'isi' => 'Nam sollicitudin eros nec sem maximus luctus. Duis euismod ligula quis venenatis interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at tortor et metus volutpat tempus. Nunc dui mauris, sodales id rhoncus eget, hendrerit nec mi. Quisque pharetra dui a tempus rhoncus. Morbi ut magna neque. In sit amet lobortis eros, ut maximus nisi. Proin viverra magna eget diam feugiat feugiat. Sed blandit massa in mollis ullamcorper. Ut placerat libero urna, ac varius justo dictum commodo. Duis luctus fermentum feugiat. Aenean faucibus, mi vel cursus molestie, leo magna venenatis nisl, et imperdiet leo neque ut tortor.',
                'jenis' => 'tugas',
            ],
            [
                'id' => '6',
                'id_author' => '6',
                'id_kelas' => '2',
                'judul' => 'Absen 1 Kelas Bahasa',
                'isi' => 'Nam sollicitudin eros nec sem maximus luctus. Duis euismod ligula quis venenatis interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at tortor et metus volutpat tempus. Nunc dui mauris, sodales id rhoncus eget, hendrerit nec mi. Quisque pharetra dui a tempus rhoncus. Morbi ut magna neque. In sit amet lobortis eros, ut maximus nisi. Proin viverra magna eget diam feugiat feugiat. Sed blandit massa in mollis ullamcorper. Ut placerat libero urna, ac varius justo dictum commodo. Duis luctus fermentum feugiat. Aenean faucibus, mi vel cursus molestie, leo magna venenatis nisl, et imperdiet leo neque ut tortor.',
                'jenis' => 'isian',
            ],
            
        ]);
    }
}