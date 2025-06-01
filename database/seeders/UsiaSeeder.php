<?php

namespace Database\Seeders;

use App\Models\Usia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $umurList = [
            '0-3 Bulan',
            '4-6 Bulan',
            '7-9 Bulan',
            '10-12 Bulan',
            '1-2 Tahun',
            '2-3 Tahun',
            '3-5 Tahun',
        ];

        foreach ($umurList as $umur) {
            Usia::create(['umur' => $umur]);
        }
    }
}
