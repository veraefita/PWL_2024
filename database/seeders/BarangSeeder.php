<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG01', 'barang_nama' => 'Air Mineral', 'harga_beli' => 5000, 'harga_jual' => 7000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG02', 'barang_nama' => 'Keripik Kentang', 'harga_beli' => 15000, 'harga_jual' => 20000],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'BRG03', 'barang_nama' => 'Vitamin C', 'harga_beli' => 30000, 'harga_jual' => 40000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'BRG04', 'barang_nama' => 'Obat Batuk', 'harga_beli' => 25000, 'harga_jual' => 35000],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'BRG05', 'barang_nama' => 'Sepatu Lari', 'harga_beli' => 500000, 'harga_jual' => 600000],
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'BRG06', 'barang_nama' => 'Matras Yoga', 'harga_beli' => 200000, 'harga_jual' => 250000],
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'BRG07', 'barang_nama' => 'Buku Tulis', 'harga_beli' => 10000, 'harga_jual' => 15000],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'BRG08', 'barang_nama' => 'Pulpen', 'harga_beli' => 5000, 'harga_jual' => 8000],
            ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'BRG09', 'barang_nama' => 'Boneka Teddy', 'harga_beli' => 75000, 'harga_jual' => 100000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'BRG10', 'barang_nama' => 'Mobil Mainan', 'harga_beli' => 120000, 'harga_jual' => 150000],
        ];

        foreach ($data as $item) {
            DB::table('m_barang')->updateOrInsert(
                ['barang_id' => $item['barang_id']], // Jika ID ada, update
                $item // Jika ID tidak ada, insert baru
            );
        }
    }
}