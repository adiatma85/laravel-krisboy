<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            [
                'id' => 1,
                'name' => 'ASUS'
            ],
            [
                'id' => 2,
                'name' => 'HP'
            ],
            [
                'id' => 3,
                'name' => 'LENOVO'
            ],
            [
                'id' => 4,
                'name' => 'SAMSUNG'
            ],
            [
                'id' => 5,
                'name' => 'LG'
            ],
            [
                'id' => 6,
                'name' => 'FUJITSU'
            ],
            [
                'id' => 7,
                'name' => 'DELL'
            ],
            [
                'id' => 8,
                'name' => 'LOREM IPSUM'
            ],
        ];

        Brand::insert($brands);
    }
}
