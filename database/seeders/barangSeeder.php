<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['nama'=>'Vivo','varian'=>'Y12S','harga_beli'=>200000,'harga_jual'=>150000],
            ['nama'=>'Vivo','varian'=>'Y12','harga_beli'=>100000,'harga_jual'=>500000],
            ['nama'=>'Oppo','varian'=>'A71','harga_beli'=>300000,'harga_jual'=>200000],
            ['nama'=>'Iphone','varian'=>'7SPLUS','harga_beli'=>350000,'harga_jual'=>300000],
            ['nama'=>'Iphone','varian'=>'11PROMAX','harga_beli'=>400000,'harga_jual'=>350000],
        ];
        DB::table('barang')->insert($barang);
    }
}
