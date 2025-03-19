<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); // Matikan sementara foreign key constraints
        DB::table('t_penjualan')->truncate(); // Hapus data lama sebelum mengisi baru
        
        $data = [
            ['penjualan_id' => 1, 'user_id' => 1, 'pembeli' => 'Rizky Ramadhan', 'penjualan_kode' => 'PJ201', 'penjualan_tanggal' => '2025-03-03 04:19:38'],
            ['penjualan_id' => 2, 'user_id' => 1, 'pembeli' => 'Lina Kusuma', 'penjualan_kode' => 'PJ202', 'penjualan_tanggal' => '2025-03-03 04:19:38'],
            ['penjualan_id' => 3, 'user_id' => 1, 'pembeli' => 'Dedi Setiawan', 'penjualan_kode' => 'PJ203', 'penjualan_tanggal' => '2025-03-03 04:19:38'],
            ['penjualan_id' => 4, 'user_id' => 1, 'pembeli' => 'Siti Rahayu', 'penjualan_kode' => 'PJ204', 'penjualan_tanggal' => '2025-03-03 04:19:38'],
            ['penjualan_id' => 5, 'user_id' => 1, 'pembeli' => 'Andi Pratama', 'penjualan_kode' => 'PJ205', 'penjualan_tanggal' => '2025-03-03 04:19:38'],
            ['penjualan_id' => 6, 'user_id' => 1, 'pembeli' => 'Wulan Anggraini', 'penjualan_kode' => 'PJ206', 'penjualan_tanggal' => '2025-03-03 04:19:38'],
            ['penjualan_id' => 7, 'user_id' => 1, 'pembeli' => 'Eka Saputra', 'penjualan_kode' => 'PJ207', 'penjualan_tanggal' => '2025-03-03 04:19:38'],
            ['penjualan_id' => 8, 'user_id' => 1, 'pembeli' => 'Dina Permata', 'penjualan_kode' => 'PJ208', 'penjualan_tanggal' => '2025-03-03 04:19:38'],
            ['penjualan_id' => 9, 'user_id' => 1, 'pembeli' => 'Bayu Nugroho', 'penjualan_kode' => 'PJ209', 'penjualan_tanggal' => '2025-03-03 04:19:38'],
            ['penjualan_id' => 10, 'user_id' => 1, 'pembeli' => 'Nia Lestari', 'penjualan_kode' => 'PJ210', 'penjualan_tanggal' => '2025-03-03 04:19:38'],
        ];
        
        DB::table('t_penjualan')->insert($data);
        
        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); // Aktifkan kembali foreign key constraints
    }
}