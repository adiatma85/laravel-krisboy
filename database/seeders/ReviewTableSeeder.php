<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tag Kuliah
        $laptopKuliah = [
            [
                'title' => 'Asu Zenbook buat kuliah',
                'gadget_name' => 'Asus Zenbook',
                'overview_description' => 'Lorem ipsum sir dolor amet overview description yang panjang dan lebar',
                'desain_description' => 'Lorem ipsum sir dolor amet desain description yang panjang dan lebar',
                'performa_description' => 'Lorem ipsum sir dolor amet performa description yang panjang dan lebar',
                'layar_description' => 'Lorem ipsum sir dolor amet layar description yang panjang dan lebar',
                'baterai_description' => 'Lorem ipsum sir dolor amet baterai description yang panjang dan lebar',
                'konektivitas_description' => 'Lorem ipsum sir dolor amet konektivitas description yang panjang dan lebar' ,
                'kesimpulan' => 'Lorem ipsum sir dolor amet kesimpulan description yang panjang dan lebar',
                'tag_id' => 1,
                'homepage_review_id' => 1,
                'price' => 7500000,
                'overall_rating' => 4.1,
                'brand_id' => 1,
            ],
            [
                'title' => 'Dell bukan kuliah',
                'gadget_name' => 'Dell ini untuk kuliah',
                'overview_description' => 'Lorem ipsum sir dolor amet overview description yang panjang dan lebar',
                'desain_description' => 'Lorem ipsum sir dolor amet desain description yang panjang dan lebar',
                'performa_description' => 'Lorem ipsum sir dolor amet performa description yang panjang dan lebar',
                'layar_description' => 'Lorem ipsum sir dolor amet layar description yang panjang dan lebar',
                'baterai_description' => 'Lorem ipsum sir dolor amet baterai description yang panjang dan lebar',
                'konektivitas_description' => 'Lorem ipsum sir dolor amet konektivitas description yang panjang dan lebar' ,
                'kesimpulan' => 'Lorem ipsum sir dolor amet kesimpulan description yang panjang dan lebar',
                'tag_id' => 1,
                'homepage_review_id' => null,
                'price' => 10000000,
                'overall_rating' => 3.9,
                'brand_id' => 7,
            ],
            [
                'title' => 'HP buat kuliah',
                'gadget_name' => 'HP yang cocok untuk kuliah hehehe',
                'overview_description' => 'Lorem ipsum sir dolor amet overview description yang panjang dan lebar',
                'desain_description' => 'Lorem ipsum sir dolor amet desain description yang panjang dan lebar',
                'performa_description' => 'Lorem ipsum sir dolor amet performa description yang panjang dan lebar',
                'layar_description' => 'Lorem ipsum sir dolor amet layar description yang panjang dan lebar',
                'baterai_description' => 'Lorem ipsum sir dolor amet baterai description yang panjang dan lebar',
                'konektivitas_description' => 'Lorem ipsum sir dolor amet konektivitas description yang panjang dan lebar' ,
                'kesimpulan' => 'Lorem ipsum sir dolor amet kesimpulan description yang panjang dan lebar',
                'tag_id' => 1,
                'homepage_review_id' => 1,
                'price' => 7250000,
                'overall_rating' => 4.2,
                'brand_id' => 2,
            ],
        ];
        // Tag Gaming
        // Tag Desain
        // Tag Kantoran   

        Review::insert($laptopKuliah);
    }
}
