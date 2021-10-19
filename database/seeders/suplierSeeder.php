<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class suplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier = [
            ['nama'=>'Rifa','alamat'=>'Sindang Palay','kose_pos'=>1234,'kota'=>'Bandung'],
            ['nama'=>'Sila','alamat'=>'Katapang','kose_pos'=>4321,'kota'=>'Bandung'],
            ['nama'=>'Silvi','alamat'=>'Sayati','kose_pos'=>2134,'kota'=>'Bandung'],
            ['nama'=>'Alliyul','alamat'=>'Sayuran','kose_pos'=>2143,'kota'=>'Bandung'],
            ['nama'=>'Rio','alamat'=>'Cagkuang','kose_pos'=>4123,'kota'=>'Bandung']
         ];
         DB::table('suplier')->insert($suplier);
    }
}
