<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_supplier')->insert([
            [
                'supplier_kode' => 'SUP001',
                'supplier_nama' => 'PT. Sumber Jaya',
                'supplier_alamat' => 'Jl. Raya Industri No.1, Jakarta',
                'created_at' => NOW(),
            ],
            [
                'supplier_kode' => 'SUP002',
                'supplier_nama' => 'CV. Makmur Sentosa',
                'supplier_alamat' => 'Jl. Merdeka No.5, Surabaya',
                'created_at' => NOW(),
            ],
            [
                'supplier_kode' => 'SUP003',
                'supplier_nama' => 'UD. Sukses Abadi',
                'supplier_alamat' => 'Jl. Kenangan No.3, Bandung',
                'created_at' => NOW(),
            ],
        ]);
        
    }
}