<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class HeroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hero = [
            ['realName'=>'Clack Kent', 'heroName'=>'Superman', 'power'=>'Bisa Terbang', 'kindofPower'=>'Bisa Terbang','gender'=>'Laki-laki', 'height'=>'160', 'weight'=>'60', 'bornDate'=>'1998-12-06'],
            ['realName'=>'Doktor Steven Vincen Strange', 'heroName'=>'Doktor Strange', 'power'=>'Ilmu Sihir', 'kindofPower'=>'Ilmu Sihir','gender'=>'Laki-Laki', 'height'=>'165', 'weight'=>'65', 'bornDate' =>'1889-11-12'],
            ['realName'=>'Thor', 'heroName'=>'Thor', 'power'=>'Odinforce', 'kindofPower'=>'Odinforce','gender'=>'Laki-Laki', 'height'=>'150', 'weight'=>'50', 'bornDate' =>'1990-06-25'],
            ['realName'=>'Carol Danvers', 'heroName'=>'Capten Marvel', 'power'=>'Fisik Yang Kuat', 'kindofPower'=>'Fisik Yang Kuat','gender'=>'Laki-laki', 'height'=>'170', 'weight'=>'68', 'bornDate'=>'1988-11-04'],
            ['realName'=>'Toni Stark', 'heroName'=>'War machine', 'power'=>'Laser', 'kindofPower'=>'Laser','gender'=>'Laki-Laki', 'height'=>'168', 'weight'=>'55', 'bornDate' =>'1996-01-27'],
            ['realName'=>'Sam Wilson', 'heroName'=>'Captain Amera', 'power'=>'Tameng Yang Kuat', 'kindofPower'=>'Tameng Yang Kuat','gender'=>'Laki-Laki', 'height'=>'150', 'weight'=>'78', 'bornDate' =>'1897-04-30'],
            ['realName'=>'Bruce Banner', 'heroName'=>'Hulk', 'power'=>'Kuat', 'kindofPower'=>'Kuat','gender'=>'Laki-Laki', 'height'=>'165', 'weight'=>'57', 'bornDate'=>'1886-12-29'],
            ['realName'=>'Bruce Wayne', 'heroName'=>'Batman', 'power'=>'Mempunyai akal canggih', 'kindofPower'=>'Mempunyai akal canggih','gender'=>'Laki-Laki', 'height'=>'177', 'weight'=>'70', 'bornDate' =>'1995-10-01'],
            ['realName'=>'Don Heck', 'heroName'=>'Ironman', 'power'=>'Armot', 'kindofPower'=>'Armor','gender'=>'Laki-Laki', 'height'=>'155', 'weight'=>'75', 'bornDate' =>'1890-02-20'],
            ['realName'=>'Pitter Parker', 'heroName'=>'Spiderman', 'power'=>'Kecepatan', 'kindofPower'=>'Kecepatan','gender'=>'Laki-Laki', 'height'=>'155', 'weight'=>'75', 'bornDate' =>'1890-02-20'],
        ];
        DB::table('hero')->insert($hero);
    }
}
