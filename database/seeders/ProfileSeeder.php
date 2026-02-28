<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    \DB::table('profiles')->insert([
        'nama'  => 'Hibrizi Fathin Dhonan',
        'nim'   => '20230140071',
        'prodi' => 'Teknik Informatika',
        'hobi'  => 'Bermain Game dan Coding',
        'created_at' => now(),
    ]);
}
}
