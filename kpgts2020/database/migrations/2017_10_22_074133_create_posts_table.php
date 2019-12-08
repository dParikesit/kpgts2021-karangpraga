<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kpgts2020_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_author')->unsigned(); // buat foreign key
            $table->string('post_title');
            $table->string('post_slug');
            $table->string('post_cat');
            $table->string('post_desc');
            $table->longText('post_content', 500);
            $table->string('post_media');
            $table->dateTime('post_date');
            $table->string('post_status');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('post_author')->references('id')->on('kpgts2020_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kpgts2020_posts');
    }
}
