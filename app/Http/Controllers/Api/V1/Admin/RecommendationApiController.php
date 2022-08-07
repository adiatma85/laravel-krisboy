<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreRecommendationRequest;
use App\Http\Requests\UpdateRecommendationRequest;
use App\Http\Resources\Admin\RecommendationResource;
use App\Models\Recommendation;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RecommendationApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('recommendation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RecommendationResource(Recommendation::all());
    }

    public function store(StoreRecommendationRequest $request)
    {
        $recommendation = Recommendation::create($request->all());

        return (new RecommendationResource($recommendation))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Recommendation $recommendation)
    {
        abort_if(Gate::denies('recommendation_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RecommendationResource($recommendation);
    }

    public function update(UpdateRecommendationRequest $request, Recommendation $recommendation)
    {
        $recommendation->update($request->all());

        return (new RecommendationResource($recommendation))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Recommendation $recommendation)
    {
        abort_if(Gate::denies('recommendation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $recommendation->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
