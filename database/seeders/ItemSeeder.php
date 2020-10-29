<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'judul' => "Brenda",
            'stok' => 20,
            'harga' => 400000,
            'gambar' => 'BOOK5802IMG6339.jpeg'
        ]);
        DB::table('items')->insert([
            'judul' => "Adalah",
            'stok' => 15,
            'harga' => 100000,
            'gambar' => 'BOOK14509IMG854.jpeg'
        ]);
        DB::table('items')->insert([
            'judul' => "Panic",
            'stok' => 5,
            'harga' => 600000,
            'gambar' => 'BOOK60768IMG3850.jpeg'
        ]);
        DB::table('items')->insert([
            'judul' => "After 9 Years",
            'stok' => 3,
            'harga' => 800000,
            'gambar' => 'BOOK88929IMG6254.jpeg'
        ]);
    }
}
