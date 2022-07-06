<?php

namespace Database\Seeders;

use App\Models\Rule;
use Illuminate\Database\Seeder;

class CreateRuleSeeder extends Seeder
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
                'kode_penyakit' => 'P001',
                'G001' => true,
                'G003' => true,
                'G007' => true,
                'G021' => true
            ],
            [
                'kode_penyakit' => 'P002',
                'G002' => true,
                'G017' => true,
                'G018' => true,
                'G020' => true
            ],
            [
                'kode_penyakit' => 'P003',
                'G001' => true,
                'G014' => true,
                'G015' => true,
                'G016' => true
            ],
            [
                'kode_penyakit' => 'P004',
                'G002' => true,
                'G005' => true,
                'G006' => true,
                'G011' => true,
                'G012' => true,
                'G013' => true
            ],
            [
                'kode_penyakit' => 'P005',
                'G001' => true,
                'G003' => true,
                'G010' => true
            ],
            [
                'kode_penyakit' => 'P006',
                'G001' => true,
                'G004' => true,
                'G005' => true,
                'G008' => true,
                'G009' => true
            ],
            [
                'kode_penyakit' => 'P007',
                'G004' => true,
                'G005' => true,
                'G006' => true,
                'G011' => true,
                'G019' => true
            ]
        ];

        foreach($data as $row) {
            Rule::create($row);
        }
    }
}
