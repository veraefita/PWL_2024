<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); // Matikan sementara foreign key constraints
        DB::table('t_penjualan')->truncate(); // Hapus data lama sebelum mengisi baru
        DB::table('t_penjualan_detail')->truncate(); // Hapus data lama sebelum mengisi baru di detail
        
        $penjualan = [
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
        
        DB::table('t_penjualan')->insert($penjualan);
        
        $penjualan_detail = [
            ['detail_id' => 1, 'penjualan_id' => 1, 'barang_id' => 1, 'harga' => 7000, 'jumlah' => 3],
            ['detail_id' => 2, 'penjualan_id' => 2, 'barang_id' => 2, 'harga' => 20000, 'jumlah' => 2],
            ['detail_id' => 3, 'penjualan_id' => 3, 'barang_id' => 3, 'harga' => 40000, 'jumlah' => 1],
            ['detail_id' => 4, 'penjualan_id' => 4, 'barang_id' => 4, 'harga' => 35000, 'jumlah' => 5],
            ['detail_id' => 5, 'penjualan_id' => 5, 'barang_id' => 5, 'harga' => 600000, 'jumlah' => 1],
            ['detail_id' => 6, 'penjualan_id' => 6, 'barang_id' => 6, 'harga' => 250000, 'jumlah' => 2],
            ['detail_id' => 7, 'penjualan_id' => 7, 'barang_id' => 7, 'harga' => 15000, 'jumlah' => 3],
            ['detail_id' => 8, 'penjualan_id' => 8, 'barang_id' => 8, 'harga' => 8000, 'jumlah' => 4],
            ['detail_id' => 9, 'penjualan_id' => 9, 'barang_id' => 9, 'harga' => 100000, 'jumlah' => 1],
            ['detail_id' => 10, 'penjualan_id' => 10, 'barang_id' => 10, 'harga' => 150000, 'jumlah' => 2],
        ];
        
        DB::table('t_penjualan_detail')->insert($penjualan_detail);
        
        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); // Aktifkan kembali foreign key constraints
    }
}
