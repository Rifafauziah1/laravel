<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(HeroTableSeeder::class);
        //$this->call(BiodataSeeder::class);
        //$this->call(barangSeeder::class);
        $this->call(PesananSeeder::class);
    }
}
