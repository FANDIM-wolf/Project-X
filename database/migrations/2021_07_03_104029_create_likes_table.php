<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            //link with user
            $table->unsignedBigInteger('user_site_id');
            $table->foreign('user_site_id')
            ->references('id')->on('user_sites');
            //link with post 
            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id')
            ->references('id')->on('posts');
            //amount of likes 
            $table->integer("amount");
            $table->softDeletes();
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
        Schema::dropIfExists('likes');
    }
}
