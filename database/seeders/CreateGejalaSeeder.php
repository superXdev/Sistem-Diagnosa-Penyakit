<?php

namespace Database\Seeders;

use App\Models\Gejala;
use Illuminate\Database\Seeder;

class CreateGejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama' => 'Demam',
                'kode' => 'G001'
            ],
            [
                'nama' => 'Demam tinggi',
                'kode' => 'G002'
            ],
            [
                'nama' => 'Batuk',
                'kode' => 'G003'
            ],
            [
                'nama' => 'Diare',
                'kode' => 'G004'
            ],
            [
                'nama' => 'Mual',
                'kode' => 'G005'
            ],
            [
                'nama' => 'Muntah',
                'kode' => 'G006'
            ],
            [
                'nama' => 'Nyeri otot',
                'kode' => 'G007'
            ],
            [
                'nama' => 'Sakit perut',
                'kode' => 'G008'
            ],
            [
                'nama' => 'Kram otot',
                'kode' => 'G009'
            ],
            [
                'nama' => 'Pilek',
                'kode' => 'G010'
            ],
            [
                'nama' => 'Muntah',
                'kode' => 'G011'
            ],
            [
                'nama' => 'Tubuh menggigil',
                'kode' => 'G012'
            ],
            [
                'nama' => 'Tubuh nyeri',
                'kode' => 'G013'
            ],
            [
                'nama' => 'Penyakit kuning',
                'kode' => 'G014'
            ],
            [
                'nama' => 'Nyeri sendi',
                'kode' => 'G015'
            ],
            [
                'nama' => 'Nyeri perut',
                'kode' => 'G016'
            ],
            [
                'nama' => 'Trombosit turun',
                'kode' => 'G017'
            ],
            [
                'nama' => 'Muncul bintik merah',
                'kode' => 'G018'
            ],
            [
                'nama' => 'Gatal',
                'kode' => 'G019'
            ],
            [
                'nama' => 'Sakit di persendian',
                'kode' => 'G020'
            ],
            [
                'nama' => 'Sakit kepala',
                'kode' => 'G021'
            ]
        ];

        Gejala::insert($data);
    }
}
