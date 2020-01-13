<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('reporter_id');
            $table->string('subcategory_name');
            $table->string('blog_title');
            $table->text('blog_short_description');
            $table->text('blog_long_description');
            $table->text('blog_image');
            $table->string('division_name');
            $table->string('district_name');
            $table->string('upazilla_name');
            $table->tinyInteger('publication_status');
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
        Schema::dropIfExists('blogs');
    }
}
