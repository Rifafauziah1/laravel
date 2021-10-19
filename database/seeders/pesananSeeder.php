<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class pesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            ['nama_pelanggan'=>'Rifa','nama_barang'=>'Vivo Y12S','qty'=>10,'tanggal_pesan'=>'2021-06-25'],
            ['nama_pelanggan'=>'Sila','nama_barang'=>'Vivo Y12','qty'=>9,'tanggal_pesan'=>'2020-12-01'],
            ['nama_pelanggan'=>'Silvi','nama_barang'=>'Oppo A71','qty'=>11,'tanggal_pesan'=>'2020-12-12'],
            ['nama_pelanggan'=>'Alliyul','nama_barang'=>'Iphone 7SPLUS','qty'=>5,'tanggal_pesan'=>'2021-11-10'],
            ['nama_pelanggan'=>'Rio','nama_barang'=>'Iphone 11PROMAX','qty'=>15,'tanggal_pesan'=>'2021-02-28']
        ];
        DB::table('pesanan')->insert($pesanan);
    }
}
