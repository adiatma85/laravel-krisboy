<?php

namespace App\Http\Controllers\Api\V1\Public;

use App\Http\Controllers\Controller;
use App\Models\HomepageReview;
use Illuminate\Http\Request;

class HomepageApiController extends Controller
{
    public function reviews(Request $request){
        // Get the activated homepage review
        // TODO: Add a condition
        $homepageReview = HomepageReview::first();

        // Get the list of homepage review
        $reviews = $homepageReview->reviews;

        // Return in to client
        $response = [
            'code' => 200,
            'message' => 'success fetch',
            'data' => [
                'name' => $homepageReview->name,
                'reviews' => $reviews,
            ],
        ];

        return response()->json($response, 200);
    }
}
