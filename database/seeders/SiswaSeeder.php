<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Siswa::insert([
            [
                'nisn' => '0012345678',
                'nama_siswa' => 'Budi Santoso',
                'jenis_kelamin' => 'Laki-Laki',
                'kelas_id' => 1
            ],
            [
                'nisn' => '0012345679',
                'nama_siswa' => 'Siti Aminah',
                'jenis_kelamin' => 'Perempuan',
                'kelas_id' => 1
            ]
        ]);
    }
}
