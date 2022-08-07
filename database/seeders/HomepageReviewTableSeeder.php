<?php

namespace Database\Seeders;

use App\Models\HomepageReview;
use Illuminate\Database\Seeder;

class HomepageReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $homepageReviews = [
            [
                'title' => 'Harga laptop tujuh jutaan',
                'is_activated' => true,
            ],
        ];

        HomepageReview::insert($homepageReviews);
    }
}
