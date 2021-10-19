<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class pembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $pembeli = [
           ['nama'=>'Rifa','jenis_kelamin'=>'Perempuan','alamat'=>'Sindang Palay','kode_post'=>1234,'kota'=>'Bandung','tanggal_lahir'=>'2004-06-25'],
           ['nama'=>'Sila','jenis_kelamin'=>'Perempuan','alamat'=>'Katapang','kode_post'=>4321,'kota'=>'Bandung','tanggal_lahir'=>'2004-10-13'],
           ['nama'=>'Silvi','jenis_kelamin'=>'Perempuan','alamat'=>'Sayati','kode_post'=>2134,'kota'=>'Bandung','tanggal_lahir'=>'2004-12-02'],
           ['nama'=>'Alliyul','jenis_kelamin'=>'Perempuan','alamat'=>'Sayuran','kode_post'=>2143,'kota'=>'Bandung','tanggal_lahir'=>'2004-01-30'],
           ['nama'=>'Rio','jenis_kelamin'=>'Perempuan','alamat'=>'Cagkuang','kode_post'=>4123,'kota'=>'Bandung','tanggal_lahir'=>'2004-09-17'],
        ];
        DB::table('pembeli')->insert($pembeli);
    }
}
