<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Tag
    Route::apiResource('tags', 'TagApiController');

    // Review
    Route::post('reviews/media', 'ReviewApiController@storeMedia')->name('reviews.storeMedia');
    Route::apiResource('reviews', 'ReviewApiController');

    // Recommendation
    Route::post('recommendations/media', 'RecommendationApiController@storeMedia')->name('recommendations.storeMedia');
    Route::apiResource('recommendations', 'RecommendationApiController');
});

Route::group(['prefix' => 'v1/public', 'as' => 'api.public.', 'namespace' => 'Api\V1\Public'], function () {
    Route::get('testing/api', function () {
        return response()->json("testing", 200);
    });

    Route::get('homepage/review-top', 'HomepageApiController@topReviews')->name('homepage.topReviews');

    Route::get('homepage/review-bottom', 'HomepageApiController@bottomReviews')->name('homepage.bottomReviews');

    Route::get('homepage/tags', 'HomepageApiController@tagReveal')->name('homepage.categoryReveal');

    Route::get('homepage/brands', 'HomepageApiController@brandReveal')->name('homepage.brandReveal');
});