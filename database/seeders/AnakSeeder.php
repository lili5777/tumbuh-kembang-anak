<?php

namespace Database\Seeders;

use App\Models\Anak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $anaks = [
            // Age group 1
            ['nama' => 'Aisha', 'usia_id' => 1, 'gender' => 'P', 'tb' => 52.00, 'bb' => 4.80, 'lk' => 36.00, 'motorik_id' => 1, 'bicara_id' => 4, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 10:07:41', 'updated_at' => '2025-07-06 10:07:41'],
            ['nama' => 'Bima', 'usia_id' => 1, 'gender' => 'L', 'tb' => 48.00, 'bb' => 3.20, 'lk' => 38.00, 'motorik_id' => 1, 'bicara_id' => 4, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 10:09:59', 'updated_at' => '2025-07-06 10:09:59'],
            ['nama' => 'Citra', 'usia_id' => 1, 'gender' => 'P', 'tb' => 58.00, 'bb' => 5.50, 'lk' => 40.00, 'motorik_id' => 1, 'bicara_id' => 4, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 10:13:56', 'updated_at' => '2025-07-06 10:13:56'],
            ['nama' => 'Dito', 'usia_id' => 1, 'gender' => 'L', 'tb' => 50.00, 'bb' => 4.00, 'lk' => 37.00, 'motorik_id' => 1, 'bicara_id' => 4, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 10:14:34', 'updated_at' => '2025-07-06 10:14:34'],
            ['nama' => 'Elisa', 'usia_id' => 1, 'gender' => 'P', 'tb' => 47.00, 'bb' => 2.80, 'lk' => 35.00, 'motorik_id' => 1, 'bicara_id' => 4, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 10:15:05', 'updated_at' => '2025-07-06 10:15:05'],
            ['nama' => 'Fajar', 'usia_id' => 1, 'gender' => 'L', 'tb' => 56.00, 'bb' => 4.70, 'lk' => 38.00, 'motorik_id' => 2, 'bicara_id' => 5, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 10:16:08', 'updated_at' => '2025-07-06 10:16:08'],
            ['nama' => 'Gita', 'usia_id' => 1, 'gender' => 'P', 'tb' => 57.00, 'bb' => 5.00, 'lk' => 39.00, 'motorik_id' => 2, 'bicara_id' => 4, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 10:17:03', 'updated_at' => '2025-07-06 10:17:17'],
            ['nama' => 'Hanif', 'usia_id' => 1, 'gender' => 'L', 'tb' => 55.00, 'bb' => 4.60, 'lk' => 38.00, 'motorik_id' => 1, 'bicara_id' => 5, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 10:18:05', 'updated_at' => '2025-07-06 10:18:05'],
            ['nama' => 'Indah', 'usia_id' => 1, 'gender' => 'P', 'tb' => 58.00, 'bb' => 5.10, 'lk' => 39.00, 'motorik_id' => 2, 'bicara_id' => 4, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 10:18:45', 'updated_at' => '2025-07-06 10:18:45'],
            ['nama' => 'Joko', 'usia_id' => 1, 'gender' => 'L', 'tb' => 56.00, 'bb' => 4.80, 'lk' => 38.00, 'motorik_id' => 2, 'bicara_id' => 5, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 10:19:15', 'updated_at' => '2025-07-06 10:19:15'],
            ['nama' => 'Kiki', 'usia_id' => 1, 'gender' => 'L', 'tb' => 50.00, 'bb' => 4.00, 'lk' => 34.00, 'motorik_id' => 3, 'bicara_id' => 6, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 10:21:44', 'updated_at' => '2025-07-06 10:21:44'],
            ['nama' => 'Lina', 'usia_id' => 1, 'gender' => 'P', 'tb' => 52.00, 'bb' => 4.20, 'lk' => 33.00, 'motorik_id' => 3, 'bicara_id' => 6, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 10:22:32', 'updated_at' => '2025-07-06 10:22:32'],
            ['nama' => 'Miko', 'usia_id' => 1, 'gender' => 'L', 'tb' => 49.00, 'bb' => 3.80, 'lk' => 32.00, 'motorik_id' => 3, 'bicara_id' => 5, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 10:23:08', 'updated_at' => '2025-07-06 10:23:08'],
            ['nama' => 'Nia', 'usia_id' => 1, 'gender' => 'P', 'tb' => 51.00, 'bb' => 4.10, 'lk' => 34.00, 'motorik_id' => 2, 'bicara_id' => 6, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 10:23:55', 'updated_at' => '2025-07-06 10:23:55'],
            ['nama' => 'Oki', 'usia_id' => 1, 'gender' => 'L', 'tb' => 50.00, 'bb' => 4.30, 'lk' => 33.00, 'motorik_id' => 1, 'bicara_id' => 6, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 10:24:35', 'updated_at' => '2025-07-06 10:24:35'],

            // Age group 2
            ['nama' => 'Prita', 'usia_id' => 2, 'gender' => 'P', 'tb' => 64.00, 'bb' => 6.50, 'lk' => 42.00, 'motorik_id' => 7, 'bicara_id' => 10, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 10:26:13', 'updated_at' => '2025-07-06 10:26:13'],
            ['nama' => 'Qori', 'usia_id' => 2, 'gender' => 'P', 'tb' => 60.00, 'bb' => 5.80, 'lk' => 40.00, 'motorik_id' => 7, 'bicara_id' => 10, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 10:26:43', 'updated_at' => '2025-07-06 10:26:43'],
            ['nama' => 'Rudi', 'usia_id' => 2, 'gender' => 'L', 'tb' => 66.00, 'bb' => 7.20, 'lk' => 44.00, 'motorik_id' => 7, 'bicara_id' => 10, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 10:27:18', 'updated_at' => '2025-07-06 10:27:18'],
            ['nama' => 'Sari', 'usia_id' => 2, 'gender' => 'P', 'tb' => 65.00, 'bb' => 6.80, 'lk' => 43.00, 'motorik_id' => 7, 'bicara_id' => 10, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 10:27:48', 'updated_at' => '2025-07-06 10:27:48'],
            ['nama' => 'Tono', 'usia_id' => 2, 'gender' => 'L', 'tb' => 62.00, 'bb' => 5.50, 'lk' => 41.00, 'motorik_id' => 7, 'bicara_id' => 10, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 10:28:16', 'updated_at' => '2025-07-06 10:28:16'],
            ['nama' => 'Umar', 'usia_id' => 2, 'gender' => 'L', 'tb' => 62.00, 'bb' => 6.10, 'lk' => 40.00, 'motorik_id' => 8, 'bicara_id' => 11, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 10:28:59', 'updated_at' => '2025-07-06 10:28:59'],
            ['nama' => 'Vina', 'usia_id' => 2, 'gender' => 'P', 'tb' => 63.00, 'bb' => 6.80, 'lk' => 41.00, 'motorik_id' => 7, 'bicara_id' => 11, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 10:29:25', 'updated_at' => '2025-07-06 10:29:25'],
            ['nama' => 'Wawan', 'usia_id' => 2, 'gender' => 'L', 'tb' => 61.00, 'bb' => 6.00, 'lk' => 40.00, 'motorik_id' => 8, 'bicara_id' => 11, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 10:30:00', 'updated_at' => '2025-07-06 10:30:00'],
            ['nama' => 'Xena', 'usia_id' => 2, 'gender' => 'P', 'tb' => 62.00, 'bb' => 6.20, 'lk' => 41.00, 'motorik_id' => 8, 'bicara_id' => 10, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 10:30:39', 'updated_at' => '2025-07-06 10:30:39'],
            ['nama' => 'Yudi', 'usia_id' => 2, 'gender' => 'L', 'tb' => 63.00, 'bb' => 6.50, 'lk' => 40.00, 'motorik_id' => 7, 'bicara_id' => 11, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 10:31:17', 'updated_at' => '2025-07-06 10:31:27'],
            ['nama' => 'Zara', 'usia_id' => 2, 'gender' => 'P', 'tb' => 58.00, 'bb' => 5.50, 'lk' => 38.00, 'motorik_id' => 8, 'bicara_id' => 12, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 10:32:09', 'updated_at' => '2025-07-06 10:32:21'],
            ['nama' => 'Aldi', 'usia_id' => 2, 'gender' => 'L', 'tb' => 57.00, 'bb' => 5.20, 'lk' => 37.00, 'motorik_id' => 7, 'bicara_id' => 12, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 10:33:11', 'updated_at' => '2025-07-06 10:33:11'],
            ['nama' => 'Bella', 'usia_id' => 2, 'gender' => 'P', 'tb' => 59.00, 'bb' => 5.70, 'lk' => 38.00, 'motorik_id' => 9, 'bicara_id' => 12, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 10:33:40', 'updated_at' => '2025-07-06 10:33:40'],
            ['nama' => 'Cakra', 'usia_id' => 2, 'gender' => 'L', 'tb' => 56.00, 'bb' => 5.00, 'lk' => 37.00, 'motorik_id' => 9, 'bicara_id' => 11, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 10:34:21', 'updated_at' => '2025-07-06 10:34:21'],
            ['nama' => 'Dini', 'usia_id' => 2, 'gender' => 'P', 'tb' => 57.00, 'bb' => 5.30, 'lk' => 38.00, 'motorik_id' => 8, 'bicara_id' => 12, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 10:34:47', 'updated_at' => '2025-07-06 10:34:47'],

            // Age group 3
            ['nama' => 'Raisa', 'usia_id' => 3, 'gender' => 'P', 'tb' => 70.00, 'bb' => 7.80, 'lk' => 43.00, 'motorik_id' => 13, 'bicara_id' => 16, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 10:35:48', 'updated_at' => '2025-07-06 10:35:48'],
            ['nama' => 'Farhan', 'usia_id' => 3, 'gender' => 'L', 'tb' => 68.00, 'bb' => 7.00, 'lk' => 42.00, 'motorik_id' => 13, 'bicara_id' => 16, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 10:36:16', 'updated_at' => '2025-07-06 10:36:16'],
            ['nama' => 'Gita', 'usia_id' => 3, 'gender' => 'P', 'tb' => 72.00, 'bb' => 8.50, 'lk' => 45.00, 'motorik_id' => 13, 'bicara_id' => 16, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 10:36:42', 'updated_at' => '2025-07-06 10:36:42'],
            ['nama' => 'Hendra', 'usia_id' => 3, 'gender' => 'L', 'tb' => 71.00, 'bb' => 8.00, 'lk' => 44.00, 'motorik_id' => 13, 'bicara_id' => 16, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 10:37:06', 'updated_at' => '2025-07-06 10:37:06'],
            ['nama' => 'Indira', 'usia_id' => 3, 'gender' => 'P', 'tb' => 69.00, 'bb' => 7.20, 'lk' => 43.00, 'motorik_id' => 13, 'bicara_id' => 16, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 10:37:38', 'updated_at' => '2025-07-06 10:37:38'],
            ['nama' => 'Joni', 'usia_id' => 3, 'gender' => 'L', 'tb' => 67.00, 'bb' => 7.50, 'lk' => 42.00, 'motorik_id' => 13, 'bicara_id' => 17, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 10:38:06', 'updated_at' => '2025-07-06 10:38:06'],
            ['nama' => 'Kania', 'usia_id' => 3, 'gender' => 'P', 'tb' => 68.00, 'bb' => 7.60, 'lk' => 43.00, 'motorik_id' => 13, 'bicara_id' => 17, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 10:38:31', 'updated_at' => '2025-07-06 10:38:31'],
            ['nama' => 'Luthfi', 'usia_id' => 3, 'gender' => 'L', 'tb' => 66.00, 'bb' => 7.10, 'lk' => 42.00, 'motorik_id' => 14, 'bicara_id' => 16, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 10:38:57', 'updated_at' => '2025-07-06 10:38:57'],
            ['nama' => 'Maya', 'usia_id' => 3, 'gender' => 'P', 'tb' => 67.00, 'bb' => 7.80, 'lk' => 43.00, 'motorik_id' => 14, 'bicara_id' => 17, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 10:39:24', 'updated_at' => '2025-07-06 10:39:24'],
            ['nama' => 'Nando', 'usia_id' => 3, 'gender' => 'L', 'tb' => 66.00, 'bb' => 7.30, 'lk' => 42.00, 'motorik_id' => 13, 'bicara_id' => 17, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 10:39:51', 'updated_at' => '2025-07-06 10:39:51'],
            ['nama' => 'Opik', 'usia_id' => 3, 'gender' => 'L', 'tb' => 62.00, 'bb' => 6.00, 'lk' => 39.00, 'motorik_id' => 15, 'bicara_id' => 16, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 10:40:23', 'updated_at' => '2025-07-06 10:40:23'],
            ['nama' => 'Putri', 'usia_id' => 3, 'gender' => 'P', 'tb' => 63.00, 'bb' => 6.30, 'lk' => 38.00, 'motorik_id' => 14, 'bicara_id' => 18, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 10:40:48', 'updated_at' => '2025-07-06 10:40:48'],
            ['nama' => 'Qomar', 'usia_id' => 3, 'gender' => 'L', 'tb' => 61.00, 'bb' => 6.50, 'lk' => 40.00, 'motorik_id' => 14, 'bicara_id' => 18, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 10:41:19', 'updated_at' => '2025-07-06 10:41:19'],
            ['nama' => 'Rini', 'usia_id' => 3, 'gender' => 'P', 'tb' => 60.00, 'bb' => 6.20, 'lk' => 39.00, 'motorik_id' => 15, 'bicara_id' => 18, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 10:41:44', 'updated_at' => '2025-07-06 10:41:44'],
            ['nama' => 'Surya', 'usia_id' => 3, 'gender' => 'L', 'tb' => 59.00, 'bb' => 6.10, 'lk' => 38.00, 'motorik_id' => 15, 'bicara_id' => 16, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 10:42:07', 'updated_at' => '2025-07-06 10:42:07'],


            // Age group 4
            ['nama' => 'Tari', 'usia_id' => 4, 'gender' => 'P', 'tb' => 75.00, 'bb' => 9.00, 'lk' => 47.00, 'motorik_id' => 19, 'bicara_id' => 22, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 16:00:39', 'updated_at' => '2025-07-06 16:00:39'],
            ['nama' => 'Ujang', 'usia_id' => 4, 'gender' => 'L', 'tb' => 73.00, 'bb' => 8.50, 'lk' => 46.00, 'motorik_id' => 19, 'bicara_id' => 22, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 16:01:04', 'updated_at' => '2025-07-06 16:01:04'],
            ['nama' => 'Vira', 'usia_id' => 4, 'gender' => 'P', 'tb' => 78.00, 'bb' => 9.50, 'lk' => 48.00, 'motorik_id' => 19, 'bicara_id' => 22, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 16:01:31', 'updated_at' => '2025-07-06 16:01:31'],
            ['nama' => 'Wadi', 'usia_id' => 4, 'gender' => 'L', 'tb' => 76.00, 'bb' => 9.20, 'lk' => 47.00, 'motorik_id' => 19, 'bicara_id' => 22, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 16:02:05', 'updated_at' => '2025-07-06 16:02:05'],
            ['nama' => 'Yuni', 'usia_id' => 4, 'gender' => 'P', 'tb' => 74.00, 'bb' => 8.70, 'lk' => 46.00, 'motorik_id' => 19, 'bicara_id' => 22, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 16:02:39', 'updated_at' => '2025-07-06 16:02:39'],
            ['nama' => 'Zainal', 'usia_id' => 4, 'gender' => 'L', 'tb' => 71.00, 'bb' => 8.20, 'lk' => 44.00, 'motorik_id' => 19, 'bicara_id' => 23, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 16:03:25', 'updated_at' => '2025-07-06 16:03:25'],
            ['nama' => 'Ani', 'usia_id' => 4, 'gender' => 'P', 'tb' => 72.00, 'bb' => 8.40, 'lk' => 45.00, 'motorik_id' => 20, 'bicara_id' => 23, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 16:03:54', 'updated_at' => '2025-07-06 16:03:54'],
            ['nama' => 'Budi', 'usia_id' => 4, 'gender' => 'L', 'tb' => 70.00, 'bb' => 8.00, 'lk' => 44.00, 'motorik_id' => 20, 'bicara_id' => 22, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 16:04:20', 'updated_at' => '2025-07-06 16:04:20'],
            ['nama' => 'Citra', 'usia_id' => 4, 'gender' => 'P', 'tb' => 71.00, 'bb' => 8.50, 'lk' => 45.00, 'motorik_id' => 20, 'bicara_id' => 23, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 16:04:44', 'updated_at' => '2025-07-06 16:04:44'],
            ['nama' => 'Dodi', 'usia_id' => 4, 'gender' => 'L', 'tb' => 70.00, 'bb' => 8.10, 'lk' => 44.00, 'motorik_id' => 20, 'bicara_id' => 23, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 16:05:16', 'updated_at' => '2025-07-06 16:05:16'],
            ['nama' => 'Eka', 'usia_id' => 4, 'gender' => 'P', 'tb' => 66.00, 'bb' => 7.00, 'lk' => 41.00, 'motorik_id' => 19, 'bicara_id' => 24, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 16:05:48', 'updated_at' => '2025-07-06 16:05:48'],
            ['nama' => 'Fani', 'usia_id' => 4, 'gender' => 'P', 'tb' => 67.00, 'bb' => 7.30, 'lk' => 42.00, 'motorik_id' => 20, 'bicara_id' => 24, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 16:06:21', 'updated_at' => '2025-07-06 16:06:21'],
            ['nama' => 'Gito', 'usia_id' => 4, 'gender' => 'L', 'tb' => 65.00, 'bb' => 7.10, 'lk' => 40.00, 'motorik_id' => 21, 'bicara_id' => 24, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 16:07:02', 'updated_at' => '2025-07-06 16:07:02'],
            ['nama' => 'Hani', 'usia_id' => 4, 'gender' => 'P', 'tb' => 64.00, 'bb' => 7.20, 'lk' => 41.00, 'motorik_id' => 21, 'bicara_id' => 22, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 16:07:31', 'updated_at' => '2025-07-06 16:07:31'],
            ['nama' => 'Irfan', 'usia_id' => 4, 'gender' => 'L', 'tb' => 63.00, 'bb' => 7.00, 'lk' => 40.00, 'motorik_id' => 20, 'bicara_id' => 24, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 16:07:57', 'updated_at' => '2025-07-06 16:07:57'],

            // Age group 5
            ['nama' => 'Joko', 'usia_id' => 5, 'gender' => 'L', 'tb' => 85.00, 'bb' => 11.00, 'lk' => 48.00, 'motorik_id' => 25, 'bicara_id' => 28, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 16:09:00', 'updated_at' => '2025-07-06 16:09:00'],
            ['nama' => 'Kiki', 'usia_id' => 5, 'gender' => 'P', 'tb' => 82.00, 'bb' => 10.00, 'lk' => 47.00, 'motorik_id' => 25, 'bicara_id' => 28, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 16:09:27', 'updated_at' => '2025-07-06 16:09:27'],
            ['nama' => 'Lala', 'usia_id' => 5, 'gender' => 'P', 'tb' => 88.00, 'bb' => 12.00, 'lk' => 49.00, 'motorik_id' => 25, 'bicara_id' => 28, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 16:09:50', 'updated_at' => '2025-07-06 16:09:50'],
            ['nama' => 'Maman', 'usia_id' => 5, 'gender' => 'L', 'tb' => 86.00, 'bb' => 11.50, 'lk' => 48.00, 'motorik_id' => 25, 'bicara_id' => 28, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 16:10:13', 'updated_at' => '2025-07-06 16:10:13'],
            ['nama' => 'Nia', 'usia_id' => 5, 'gender' => 'P', 'tb' => 83.00, 'bb' => 10.50, 'lk' => 47.00, 'motorik_id' => 25, 'bicara_id' => 28, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 16:10:46', 'updated_at' => '2025-07-06 16:10:46'],
            ['nama' => 'Opan', 'usia_id' => 5, 'gender' => 'L', 'tb' => 80.00, 'bb' => 9.80, 'lk' => 46.00, 'motorik_id' => 25, 'bicara_id' => 29, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 16:11:12', 'updated_at' => '2025-07-06 16:11:12'],
            ['nama' => 'Putri', 'usia_id' => 5, 'gender' => 'P', 'tb' => 81.00, 'bb' => 10.00, 'lk' => 47.00, 'motorik_id' => 26, 'bicara_id' => 29, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 16:11:43', 'updated_at' => '2025-07-06 16:11:43'],
            ['nama' => 'Qori', 'usia_id' => 5, 'gender' => 'P', 'tb' => 82.00, 'bb' => 10.20, 'lk' => 46.00, 'motorik_id' => 26, 'bicara_id' => 28, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 16:12:05', 'updated_at' => '2025-07-06 16:12:05'],
            ['nama' => 'Rudi', 'usia_id' => 5, 'gender' => 'L', 'tb' => 80.00, 'bb' => 10.10, 'lk' => 47.00, 'motorik_id' => 25, 'bicara_id' => 29, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 16:12:32', 'updated_at' => '2025-07-06 16:12:32'],
            ['nama' => 'Sisi', 'usia_id' => 5, 'gender' => 'P', 'tb' => 79.00, 'bb' => 9.50, 'lk' => 46.00, 'motorik_id' => 26, 'bicara_id' => 29, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 16:13:00', 'updated_at' => '2025-07-06 16:13:00'],
            ['nama' => 'Tono', 'usia_id' => 5, 'gender' => 'L', 'tb' => 75.00, 'bb' => 8.50, 'lk' => 44.00, 'motorik_id' => 25, 'bicara_id' => 30, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 16:13:29', 'updated_at' => '2025-07-06 16:13:29'],
            ['nama' => 'Umi', 'usia_id' => 5, 'gender' => 'P', 'tb' => 74.00, 'bb' => 8.00, 'lk' => 43.00, 'motorik_id' => 26, 'bicara_id' => 30, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 16:13:56', 'updated_at' => '2025-07-06 16:13:56'],
            ['nama' => 'Vino', 'usia_id' => 5, 'gender' => 'L', 'tb' => 73.00, 'bb' => 8.20, 'lk' => 42.00, 'motorik_id' => 27, 'bicara_id' => 30, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 16:14:21', 'updated_at' => '2025-07-06 16:14:21'],
            ['nama' => 'Wina', 'usia_id' => 5, 'gender' => 'P', 'tb' => 72.00, 'bb' => 8.10, 'lk' => 41.00, 'motorik_id' => 27, 'bicara_id' => 28, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 16:14:47', 'updated_at' => '2025-07-06 16:14:47'],
            ['nama' => 'Yadi', 'usia_id' => 5, 'gender' => 'L', 'tb' => 70.00, 'bb' => 7.80, 'lk' => 40.00, 'motorik_id' => 26, 'bicara_id' => 30, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 16:15:10', 'updated_at' => '2025-07-06 16:15:10'],

            // Age group 6
            ['nama' => 'Aldi', 'usia_id' => 6, 'gender' => 'L', 'tb' => 95.00, 'bb' => 14.00, 'lk' => 50.00, 'motorik_id' => 31, 'bicara_id' => 34, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 16:31:05', 'updated_at' => '2025-07-06 16:31:05'],
            ['nama' => 'Bunga', 'usia_id' => 6, 'gender' => 'P', 'tb' => 90.00, 'bb' => 12.00, 'lk' => 49.00, 'motorik_id' => 31, 'bicara_id' => 34, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 16:31:29', 'updated_at' => '2025-07-06 16:31:29'],
            ['nama' => 'Cahya', 'usia_id' => 6, 'gender' => 'L', 'tb' => 100.00, 'bb' => 15.00, 'lk' => 52.00, 'motorik_id' => 31, 'bicara_id' => 34, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 16:31:59', 'updated_at' => '2025-07-06 16:31:59'],
            ['nama' => 'Dito', 'usia_id' => 6, 'gender' => 'L', 'tb' => 98.00, 'bb' => 13.00, 'lk' => 51.00, 'motorik_id' => 31, 'bicara_id' => 34, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 16:32:30', 'updated_at' => '2025-07-06 16:32:30'],
            ['nama' => 'Elsa', 'usia_id' => 6, 'gender' => 'P', 'tb' => 92.00, 'bb' => 12.50, 'lk' => 50.00, 'motorik_id' => 31, 'bicara_id' => 34, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 16:32:58', 'updated_at' => '2025-07-06 16:32:58'],
            ['nama' => 'Fajar', 'usia_id' => 6, 'gender' => 'L', 'tb' => 86.00, 'bb' => 11.00, 'lk' => 48.00, 'motorik_id' => 31, 'bicara_id' => 35, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 16:33:26', 'updated_at' => '2025-07-06 16:33:26'],
            ['nama' => 'Heru', 'usia_id' => 6, 'gender' => 'L', 'tb' => 85.00, 'bb' => 10.50, 'lk' => 47.00, 'motorik_id' => 32, 'bicara_id' => 35, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 16:33:53', 'updated_at' => '2025-07-06 16:33:53'],
            ['nama' => 'Ines', 'usia_id' => 6, 'gender' => 'P', 'tb' => 87.00, 'bb' => 12.50, 'lk' => 48.00, 'motorik_id' => 32, 'bicara_id' => 35, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 16:34:23', 'updated_at' => '2025-07-06 16:34:23'],
            ['nama' => 'Joni', 'usia_id' => 6, 'gender' => 'L', 'tb' => 86.00, 'bb' => 11.50, 'lk' => 47.00, 'motorik_id' => 31, 'bicara_id' => 35, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 16:34:49', 'updated_at' => '2025-07-06 16:34:49'],
            ['nama' => 'Kiki', 'usia_id' => 6, 'gender' => 'P', 'tb' => 80.00, 'bb' => 9.00, 'lk' => 45.00, 'motorik_id' => 31, 'bicara_id' => 36, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 16:35:38', 'updated_at' => '2025-07-06 16:35:38'],
            ['nama' => 'Maman', 'usia_id' => 6, 'gender' => 'L', 'tb' => 76.00, 'bb' => 8.00, 'lk' => 43.00, 'motorik_id' => 33, 'bicara_id' => 36, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 16:36:47', 'updated_at' => '2025-07-06 16:36:47'],
            ['nama' => 'Nia', 'usia_id' => 6, 'gender' => 'P', 'tb' => 75.00, 'bb' => 7.80, 'lk' => 42.00, 'motorik_id' => 33, 'bicara_id' => 34, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 16:37:13', 'updated_at' => '2025-07-06 16:37:13'],
            ['nama' => 'Opi', 'usia_id' => 6, 'gender' => 'L', 'tb' => 74.00, 'bb' => 7.50, 'lk' => 41.00, 'motorik_id' => 33, 'bicara_id' => 35, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 16:37:41', 'updated_at' => '2025-07-06 16:37:41'],
            ['nama' => 'Gita', 'usia_id' => 6, 'gender' => 'P', 'tb' => 86.00, 'bb' => 11.00, 'lk' => 48.00, 'motorik_id' => 31, 'bicara_id' => 35, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 16:38:57', 'updated_at' => '2025-07-06 16:38:57'],
            ['nama' => 'Lala', 'usia_id' => 6, 'gender' => 'P', 'tb' => 78.00, 'bb' => 8.50, 'lk' => 44.00, 'motorik_id' => 33, 'bicara_id' => 35, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 16:38:57', 'updated_at' => '2025-07-06 16:38:57'],
            // Age group 7
            ['nama' => 'Prita', 'usia_id' => 7, 'gender' => 'P', 'tb' => 105.00, 'bb' => 18.00, 'lk' => 53.00, 'motorik_id' => 37, 'bicara_id' => 40, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 16:45:09', 'updated_at' => '2025-07-06 16:45:09'],
            ['nama' => 'Qori', 'usia_id' => 7, 'gender' => 'P', 'tb' => 100.00, 'bb' => 16.00, 'lk' => 52.00, 'motorik_id' => 37, 'bicara_id' => 40, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 16:45:32', 'updated_at' => '2025-07-06 16:45:32'],
            ['nama' => 'Rudi', 'usia_id' => 7, 'gender' => 'L', 'tb' => 110.00, 'bb' => 20.00, 'lk' => 55.00, 'motorik_id' => 37, 'bicara_id' => 40, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 16:46:03', 'updated_at' => '2025-07-06 16:46:03'],
            ['nama' => 'Sari', 'usia_id' => 7, 'gender' => 'P', 'tb' => 108.00, 'bb' => 17.00, 'lk' => 54.00, 'motorik_id' => 37, 'bicara_id' => 40, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 16:46:31', 'updated_at' => '2025-07-06 16:46:31'],
            ['nama' => 'Tono', 'usia_id' => 7, 'gender' => 'L', 'tb' => 102.00, 'bb' => 16.50, 'lk' => 53.00, 'motorik_id' => 37, 'bicara_id' => 40, 'ketegori' => 'Normal', 'created_at' => '2025-07-06 16:46:59', 'updated_at' => '2025-07-06 16:46:59'],
            ['nama' => 'Umar', 'usia_id' => 7, 'gender' => 'L', 'tb' => 95.00, 'bb' => 14.00, 'lk' => 49.00, 'motorik_id' => 37, 'bicara_id' => 41, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 16:47:25', 'updated_at' => '2025-07-06 16:47:25'],
            ['nama' => 'Vina', 'usia_id' => 7, 'gender' => 'P', 'tb' => 98.00, 'bb' => 15.00, 'lk' => 50.00, 'motorik_id' => 37, 'bicara_id' => 41, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 16:47:52', 'updated_at' => '2025-07-06 16:47:52'],
            ['nama' => 'Wawan', 'usia_id' => 7, 'gender' => 'L', 'tb' => 92.00, 'bb' => 13.00, 'lk' => 48.00, 'motorik_id' => 38, 'bicara_id' => 41, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 16:48:18', 'updated_at' => '2025-07-06 16:48:18'],
            ['nama' => 'Xena', 'usia_id' => 7, 'gender' => 'P', 'tb' => 94.00, 'bb' => 14.50, 'lk' => 49.00, 'motorik_id' => 38, 'bicara_id' => 41, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 16:48:48', 'updated_at' => '2025-07-06 16:48:48'],
            ['nama' => 'Yudi', 'usia_id' => 7, 'gender' => 'L', 'tb' => 96.00, 'bb' => 15.50, 'lk' => 50.00, 'motorik_id' => 38, 'bicara_id' => 41, 'ketegori' => 'Risiko Sedang', 'created_at' => '2025-07-06 16:49:13', 'updated_at' => '2025-07-06 16:49:13'],
            ['nama' => 'Zara', 'usia_id' => 7, 'gender' => 'P', 'tb' => 88.00, 'bb' => 12.00, 'lk' => 47.00, 'motorik_id' => 39, 'bicara_id' => 40, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 16:49:43', 'updated_at' => '2025-07-06 16:49:43'],
            ['nama' => 'Aldo', 'usia_id' => 7, 'gender' => 'L', 'tb' => 85.00, 'bb' => 11.00, 'lk' => 46.00, 'motorik_id' => 38, 'bicara_id' => 42, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 16:50:07', 'updated_at' => '2025-07-06 16:50:07'],
            ['nama' => 'Bella', 'usia_id' => 7, 'gender' => 'P', 'tb' => 83.00, 'bb' => 10.00, 'lk' => 45.00, 'motorik_id' => 39, 'bicara_id' => 42, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 16:50:32', 'updated_at' => '2025-07-06 16:50:32'],
            ['nama' => 'Cakra', 'usia_id' => 7, 'gender' => 'L', 'tb' => 80.00, 'bb' => 9.50, 'lk' => 44.00, 'motorik_id' => 39, 'bicara_id' => 40, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 16:50:57', 'updated_at' => '2025-07-06 16:50:57'],
            ['nama' => 'Dini', 'usia_id' => 7, 'gender' => 'P', 'tb' => 78.00, 'bb' => 9.00, 'lk' => 43.00, 'motorik_id' => 38, 'bicara_id' => 42, 'ketegori' => 'Risiko Berat', 'created_at' => '2025-07-06 16:51:21', 'updated_at' => '2025-07-06 16:51:21'],
        ];

        Anak::insert($anaks);
    }
}
