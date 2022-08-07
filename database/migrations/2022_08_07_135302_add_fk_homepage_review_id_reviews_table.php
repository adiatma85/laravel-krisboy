<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkHomepageReviewIdReviewsTable extends Migration
{
    public function up()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->unsignedBigInteger('homepage_review_id')->nullable();
            $table->foreign('homepage_review_id', 'fk_homepage_review_id_fk')->references('id')->on('homepage_review_contents');
        });
    }
}
