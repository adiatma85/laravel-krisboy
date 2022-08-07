<?php

namespace App\Http\Requests;

use App\Models\Recommendation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateRecommendationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('recommendation_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
        ];
    }
}
