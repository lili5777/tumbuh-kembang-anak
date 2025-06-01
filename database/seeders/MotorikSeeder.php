<?php

namespace Database\Seeders;

use App\Models\Kemampuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotorikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            // 0-3 bulan
            [1, 'motorik', 'menggerakkan tangan dan kaki refleks menggenggam'],
            [1, 'motorik', 'kepala belum stabil saat tengkurap'],
            [1, 'motorik', 'tidak bisa mngangkat kepala'],
            [1, 'bicara', 'menangis mulai mengeluakan suara ("ohh,aah")'],
            [1, 'bicara', 'suara vokal mulai, tapi tidak konsisten'],
            [1, 'bicara', 'hampir tidak ada suara vokal'],

            // 4-6 bulan
            [2, 'motorik', 'mengangkat kepala berguling, mulai merai benda'],
            [2, 'motorik', 'bisa tengkurap, belum duduk mantap'],
            [2, 'motorik', 'belum bisa tengkurap atau lemas'],
            [2, 'bicara', 'mengeluarkan suara berulang seperti "ba-ba"'],
            [2, 'bicara', 'babbling muncul lambat'],
            [2, 'bicara', 'tidak ada babling'],

            // 7-9 bulan
            [3, 'motorik', 'duduk tanpa bantuan, merangkak mengambil benda kecil'],
            [3, 'motorik', 'duduk sendiri tapi masi goyang'],
            [3, 'motorik', 'belum bisa duduk sendiri, otot lemas'],
            [3, 'bicara', 'meniru suara, mulai mengenal diri sendiri'],
            [3, 'bicara', 'babling tidak terlalu variatif'],
            [3, 'bicara', 'tidak responsif saat di ajak bicara'],

            // 10-12 bulan
            [4, 'motorik', 'berdiri dengan bantuan di perabotan'],
            [4, 'motorik', 'berdiri dengan bantuan, belum berjalan'],
            [4, 'motorik', 'belum berdiri, hanya bisa duduk terbatas'],
            [4, 'bicara', 'mengucapkan kata sederhana seperti mama papa'],
            [4, 'bicara', 'bicara satu kataatau belum jelas'],
            [4, 'bicara', 'belum bisa bicara sama sekali'],

            // 1-2 tahun
            [5, 'motorik', 'berjalan sendiri, naik tangga dengan bantuan'],
            [5, 'motorik', 'jalan stabil belum bisa lari cepat'],
            [5, 'motorik', 'belum berjalan mandiri, sering jatuh'],
            [5, 'bicara', 'mengucapkan 5-20 kata, dan mulai menggabungkan kata'],
            [5, 'bicara', 'gabungan dua kata, tapi artikulasi kurang'],
            [5, 'bicara', 'tidak mampu gabungkan dua kata'],

            // 2-3 tahun
            [6, 'motorik', 'berlari,melompat,menggunakan sendok dan garpu'],
            [6, 'motorik', 'bisa lari dan lompat kecil, koordinasi halus'],
            [6, 'motorik', 'sulit melompat, tidak mampu memegang pensil'],
            [6, 'bicara', 'mengucapkan kalimat sederhana 2-3 kata, mulai memahami instruksi'],
            [6, 'bicara', 'bicara frasa sederhana, kadang terbata'],
            [6, 'bicara', 'bicara terbatas, kadang hanya gumaman'],

            // 3-5 tahun
            [7, 'motorik', 'mengayung sepeda roda tiga, berdiri dengan satu kaki'],
            [7, 'motorik', 'motorik halus ( menggambar ) tertinggal'],
            [7, 'motorik', 'tidak bisa mnegayung sepeda roda tiga,motorik halus tertinggal'],
            [7, 'bicara', 'berbicara lancar dengan kalimat lebih panjang'],
            [7, 'bicara', 'bicara cerita, tapi kadang salah struktur kalimat '],
            [7, 'bicara', 'sangat sedikit kosa kata,kesulitan menyampaikan pikiran'],
        ];

        foreach ($data as [$usia_id, $status, $keterangan]) {
            Kemampuan::create([
                'usia_id' => $usia_id,
                'status' => $status,
                'keterangan' => $keterangan,
            ]);
        }
    }
}
