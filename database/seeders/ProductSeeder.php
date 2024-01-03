<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $product = [
            [
                'nama_product' => 'Purple Pink',
                'kode_product' => "PP0101",
                'harga_product' => '10000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_product' => 'Choco Avocado',
                'kode_product' => "CA0102",
                'harga_product' => '10000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_product' => 'Choco Redvelvet',
                'kode_product' => "CR0103",
                'harga_product' => '10000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_product' => 'Choco Taro',
                'kode_product' => "CT0104",
                'harga_product' => '10000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_product' => 'Choco Bubblegum',
                'kode_product' => "CB0105",
                'harga_product' => '10000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_product' => 'Choco Durian',
                'kode_product' => "CD0106",
                'harga_product' => '10000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_product' => 'Frambozen Mocktail',
                'kode_product' => "FM0107",
                'harga_product' => '10000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_product' => 'Bluberry Mocktail',
                'kode_product' => "BM0108",
                'harga_product' => '10000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_product' => 'Kiwi Mocktail',
                'kode_product' => "KM0109",
                'hargasan_product' => '10000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        DB::table('products')->insert($product);
    }
}
