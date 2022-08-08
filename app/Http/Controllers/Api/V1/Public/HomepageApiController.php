<?php

namespace App\Http\Controllers\Api\V1\Public;

use App\Http\Controllers\Controller;
use App\Models\HomepageReview;
use App\Models\Review;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomepageApiController extends Controller
{
    public function reviews(Request $request){
        // Get the activated homepage review
        $homepageReview = HomepageReview::
            where([
                'is_active' => 1,
            ])
            ->first();

        // Get the list of homepage review
        $reviews = Review::
            select('title', 'tag_id', 'price', 'overall_rating')->
            where([
                'homepage_review_id' => $homepageReview->id,
            ])
            ->with([
                'tag' => function ($query) {
                    $query->select('id', 'name');
                },
                'media'
                ])
            ->get();

        // Return in to client
        $response = [
            'code' => 200,
            'message' => 'success fetch',
            'data' => [
                'title' => $homepageReview->title,
                'reviews' => $reviews,
            ],
        ];

        return response()->json($response, 200);
    }
}
