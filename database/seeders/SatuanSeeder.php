<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
            'kode_satuan' => 'pcs',
            'nama_satuan' => 'pieces',
            ],
            [
            'kode_satuan' => 'kg',
            'nama_satuan' => 'kilogram',
            ],
        ]);
    }
}
