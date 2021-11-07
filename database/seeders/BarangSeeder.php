<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Query Builder
        DB::table('table_barang')->insert(array(
            array(
                'foto' => '',
                'nama' => 'Barang Pertama',
                'deskripsi' => 'Lorem ipsum dolor sit amet',
                'harga' => 1000,
                'stok' => 10,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            )
        ));
    }
}
