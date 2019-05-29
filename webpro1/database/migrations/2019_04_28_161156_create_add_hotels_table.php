<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hotel_name');
            $table->string('city_name');
            $table->string('room_no');
            $table->string('adult');
            $table->string('children');
            $table->text('hotel_image');
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
        Schema::dropIfExists('add_hotels');
    }



}
