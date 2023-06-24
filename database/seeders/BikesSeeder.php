<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BikesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bikes')->insert([
            [
                'brand_name' => 'Caloi',
                'model' => 'Two Niner',
                'year_of_release' => 2021,
                'units_sold' => 12000,
                'created_at' => Carbon::now()
            ],
            [
                'brand_name' => 'Caloi',
                'model' => 'Vulcan',
                'year_of_release' => 2019,
                'units_sold' => 7800,
                'created_at' => Carbon::now()
            ],
            [
                'brand_name' => 'Monark',
                'model' => 'MTB 29',
                'year_of_release' => 2023,
                'units_sold' => 20000,
                'created_at' => Carbon::now()
            ],
            [
                'brand_name' => 'KRW',
                'model' => 'SX23',
                'year_of_release' => 2015,
                'units_sold' => 25000,
                'created_at' => Carbon::now()
            ],
            [
                'brand_name' => 'Swift',
                'model' => 'Enduravox',
                'year_of_release' => 2020,
                'units_sold' => 2500,
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
