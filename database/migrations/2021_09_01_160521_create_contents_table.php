<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('slider1');
            $table->string('slider2');
            $table->string('slider3');

            $table->string('simage1');
            $table->string('simage2');
            $table->string('simage3');

            $table->string('sh1');
            $table->string('sh2');
            $table->string('sh3');

            $table->longText('sd1');
            $table->longText('sd2');
            $table->longText('sd3');

            $table->string('sv1')->nullable();
            $table->string('sv2')->nullable();
            $table->string('sv3')->nullable();

            $table->longText('about');
            $table->longText('values');
            $table->longText('engagement');

            $table->longText('quoteh');
            $table->longText('quote');

            $table->longText('equip')->nullable();
            $table->longText('interv')->nullable();
            $table->longText('products')->nullable();
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
        Schema::dropIfExists('contents');
    }
}
