<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class pembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            ['nama_barang'=>'Vivo Y12S','nama_supplier'=>'Rifa','qty'=>10,'tanggal'=>'2021-06-25'],
            ['nama_barang'=>'Vivo Y12','nama_supplier'=>'Sila','qty'=>9,'tanggal'=>'2020-12-01'],
            ['nama_barang'=>'Oppo A71','nama_supplier'=>'Silvi','qty'=>11,'tanggal'=>'2020-12-12'],
            ['nama_barang'=>'Iphone 7SPLUS','nama_supplier'=>'Alliyul','qty'=>5,'tanggal'=>'2021-11-10'],
            ['nama_barang'=>'Iphone 11PROMAX','nama_supplier'=>'Rio','qty'=>15,'tanggal'=>'2021-02-28']
        ];
        DB::table('pembelian')->insert($pembelian);
    }
}
