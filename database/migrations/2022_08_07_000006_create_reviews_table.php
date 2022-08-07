<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('gadget_name');
            $table->longText('overview_description')->nullable();
            $table->longText('desain_description')->nullable();
            $table->longText('performa_description')->nullable();
            $table->longText('layar_description')->nullable();
            $table->longText('baterai_description')->nullable();
            $table->longText('konektivitas_description')->nullable();
            $table->longText('kesimpulan')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
