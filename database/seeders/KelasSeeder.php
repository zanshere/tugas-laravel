<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Kelas::insert([
            [
                'nama_kelas' => 'XII RPL 1',
                'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak'
            ],
            [
                'nama_kelas' => 'XII RPL 2',
                'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak'
            ],
            [
                'nama_kelas' => 'XII DKV 1',
                'kompetensi_keahlian' => 'Desain Komunikasi Visual'
            ],
            [
                'nama_kelas' => 'XII DKV 2',
                'kompetensi_keahlian' => 'Desain Komunikasi Visual'
            ],
            [
                'nama_kelas' => 'XII DKV 3',
                'kompetensi_keahlian' => 'Desain Komunikasi Visual'
            ],
            [
                'nama_kelas' => 'XII TKJ',
                'kompetensi_keahlian' => 'Teknik Komputer dan Jaringan'
            ]
        ]);
    }
}
