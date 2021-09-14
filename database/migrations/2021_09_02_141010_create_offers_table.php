<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->integer('is_on')->default('1');
            $table->string('title1');
            $table->string('image1');
            $table->string('price1');
            $table->string('valid1');
            $table->string('title2');
            $table->string('image2');
            $table->string('price2');
            $table->string('valid2');
            $table->string('title3');
            $table->string('image3');
            $table->string('price3');
            $table->string('valid3');
            $table->string('title4');
            $table->string('image4');
            $table->string('price4');
            $table->string('valid4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
