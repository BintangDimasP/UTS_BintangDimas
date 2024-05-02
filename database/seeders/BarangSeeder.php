<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
            'kode_barang' => 'A01',
            'nama_barang' => 'pistol',
            'harga_barang' => 100000,
            'deskripsi_barang' => 'pieces',
            'satuan_id' => 1,
            ],
            [
            'kode_barang' => 'A02',
            'nama_barang' => 'samurai',
            'harga_barang' => 100000,
            'deskripsi_barang' => 'kg',
            'satuan_id' => 2,
            ],
        ]);
    }
}
