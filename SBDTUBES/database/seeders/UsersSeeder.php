<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('users')->truncate();
        \DB::table('users')->insert([
            [
                'id' => '1',
                'name' => 'Bagus',
                'email' => 'sadewo1248@students.usu.ac.id',
                'password' => bcrypt('bagus123'),
            ],
            [
                'id' => '2',
                'name' => 'Karina',
                'email' => 'karinaangelatobing@gmail.com',
                'password' => bcrypt('karina123'),
            ],
            [
                'id' => '3',
                'name' => 'Kevin',
                'email' => 'simamorakevin91@gmail.com',
                'password' => bcrypt('kevin123'),
            ],
            [
                'id' => '4',
                'name' => 'Jessica',
                'email' => 'ichameliala366@gmail.com',
                'password' => bcrypt('jessica123'),
            ],
            [
                'id' => '5',
                'name' => 'Gery',
                'email' => 'geryjonathan21@gmail.com',
                'password' => bcrypt('gery123'),
            ],
            [
                'id' => '6',
                'name' => 'Paulus',
                'email' => 'email.paul.belajar@gmail.com',
                'password' => bcrypt('paulus123'),
            ],
        ]);
    }
}