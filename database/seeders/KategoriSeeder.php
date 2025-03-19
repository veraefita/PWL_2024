<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' => 'FNB01', 'kategori_nama' => 'Makanan & Minuman'],
            ['kategori_id' => 2, 'kategori_kode' => 'HLT02', 'kategori_nama' => 'Kesehatan'],
            ['kategori_id' => 3, 'kategori_kode' => 'SPT03', 'kategori_nama' => 'Olahraga'],
            ['kategori_id' => 4, 'kategori_kode' => 'BKS04', 'kategori_nama' => 'Buku & Alat Tulis'],
            ['kategori_id' => 5, 'kategori_kode' => 'TYS05', 'kategori_nama' => 'Mainan Anak'],
        ];

        foreach ($data as $item) {
            DB::table('m_kategori')->updateOrInsert(
                ['kategori_id' => $item['kategori_id']], // Jika ID ada, update
                $item // Jika ID tidak ada, insert baru
            );
        }
    }
}

