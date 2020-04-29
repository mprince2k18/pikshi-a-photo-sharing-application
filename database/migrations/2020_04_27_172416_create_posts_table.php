<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->longText('title');
            $table->string('photo');
            $table->string('size');
            $table->string('resulation');
            $table->longText('post_link');
            $table->longText('synopsis');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
            $table->string('slug');
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
        Schema::dropIfExists('posts');
    }
}
