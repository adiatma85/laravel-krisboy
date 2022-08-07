<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            [
                "id" => 1,
                "name" => "Kuliah",
            ],
            [
                "id" => 2,
                "name" => "Gaming",
            ],
            [
                "id" => 3,
                "name" => "Desain",
            ],
            [
                "id" => 4,
                "name" => "Kantoran",
            ],
            [
                "id" => 5,
                "name" => "Lorem Ipsum",
            ],
            [
                "id" => 6,
                "name" => "Dummy Tag 1",
            ],
        ];

        Tag::insert($tags);
    }

}
