<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GejalaPenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // Influenza
            [
                'penyakit_id' => 1,
                'gejala_id' => 1,
                'value_cf' => 0.2
            ],
            [
                'penyakit_id' => 1,
                'gejala_id' => 3,
                'value_cf' => 0.2
            ],
            [
                'penyakit_id' => 1,
                'gejala_id' => 7,
                'value_cf' => 0.2
            ],
            [
                'penyakit_id' => 1,
                'gejala_id' => 21,
                'value_cf' => 0.2
            ],

            // DBD
            [
                'penyakit_id' => 2,
                'gejala_id' => 2,
                'value_cf' => 0.4
            ],
            [
                'penyakit_id' => 2,
                'gejala_id' => 17,
                'value_cf' => 0.4
            ],
            [
                'penyakit_id' => 2,
                'gejala_id' => 18,
                'value_cf' => 0.4
            ],
            [
                'penyakit_id' => 2,
                'gejala_id' => 20,
                'value_cf' => 0.4
            ],

            // Hepatitis
            [
                'penyakit_id' => 3,
                'gejala_id' => 1,
                'value_cf' => 0.6
            ],
            [
                'penyakit_id' => 3,
                'gejala_id' => 14,
                'value_cf' => 0.6
            ],
            [
                'penyakit_id' => 3,
                'gejala_id' => 15,
                'value_cf' => 0.6
            ],
            [
                'penyakit_id' => 3,
                'gejala_id' => 16,
                'value_cf' => 0.6
            ],

            // Malaria
            [
                'penyakit_id' => 4,
                'gejala_id' => 2,
                'value_cf' => 0.2
            ],
            [
                'penyakit_id' => 4,
                'gejala_id' => 5,
                'value_cf' => 0.2
            ],
            [
                'penyakit_id' => 4,
                'gejala_id' => 6,
                'value_cf' => 0.2
            ],
            [
                'penyakit_id' => 4,
                'gejala_id' => 11,
                'value_cf' => 0.2
            ],
            [
                'penyakit_id' => 4,
                'gejala_id' => 12,
                'value_cf' => 0.2
            ],
            [
                'penyakit_id' => 4,
                'gejala_id' => 13,
                'value_cf' => 0.2
            ],

            // Campak
            [
                'penyakit_id' => 5,
                'gejala_id' => 1,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 5,
                'gejala_id' => 3,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 5,
                'gejala_id' => 10,
                'value_cf' => 0.8
            ],

            // Tifus
            [
                'penyakit_id' => 6,
                'gejala_id' => 1,
                'value_cf' => 0.4
            ],
            [
                'penyakit_id' => 6,
                'gejala_id' => 4,
                'value_cf' => 0.4
            ],
            [
                'penyakit_id' => 6,
                'gejala_id' => 5,
                'value_cf' => 0.4
            ],
            [
                'penyakit_id' => 6,
                'gejala_id' => 8,
                'value_cf' => 0.4
            ],
            [
                'penyakit_id' => 6,
                'gejala_id' => 9,
                'value_cf' => 0.4
            ],

            // Cacingan
            [
                'penyakit_id' => 7,
                'gejala_id' => 4,
                'value_cf' => 1
            ],
            [
                'penyakit_id' => 7,
                'gejala_id' => 5,
                'value_cf' => 1
            ],
            [
                'penyakit_id' => 7,
                'gejala_id' => 6,
                'value_cf' => 1
            ],
            [
                'penyakit_id' => 7,
                'gejala_id' => 11,
                'value_cf' => 1
            ],
            [
                'penyakit_id' => 7,
                'gejala_id' => 19,
                'value_cf' => 1
            ]
            
        ];

        DB::table('gejala_penyakit')->insert($data);
    }
}
