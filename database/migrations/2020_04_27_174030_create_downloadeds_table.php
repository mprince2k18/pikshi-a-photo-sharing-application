<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDownloadedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('downloadeds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id')
                  ->references('id')
                  ->on('posts');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
            $table->ipAddress('ip_address');
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
        Schema::dropIfExists('downloadeds');
    }
}
