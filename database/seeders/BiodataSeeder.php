<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bio = [
            ['name'=>'Rifa', 'gender'=>'Female','bornDate'=>'2004-06-25','weight'=>'45','height'=>'150'],
            ['name'=>'Sila', 'gender'=>'Female','bornDate'=>'2004-11-13','weight'=>'50','height'=>'155'],
        ];
        DB::table('biodatas')->insert($bio);
    }
}
