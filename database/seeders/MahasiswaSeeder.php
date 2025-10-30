<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'name' => 'Jude Bellingham',
            'nim' => 123456786,
            'prodi' => 'Teknologi Informasi',
            'email' => 'hasbi@gmail.com',
            'nohp' => 62857326329,
        ]);
    }
}