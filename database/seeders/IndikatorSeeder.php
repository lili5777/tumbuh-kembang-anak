<?php

namespace Database\Seeders;

use App\Models\Indikator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndikatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $indikator = [
            [
                'nama' => 'Lingkar Kepala',
            ],

            [
                'nama' => 'Berat Badan',
            ],
            [
                'nama' => 'Tinggi Badan',
            ],
            [
                'nama' => 'Kemampuan Motorik',
            ],
            [
                'nama' => 'Kelancaran Bicara',
            ],

        ];

        foreach ($indikator as $key => $value) {
            Indikator::create($value);
        }
    }
}
