<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPostTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tags', function (Blueprint $table) {
            $table->unsignedBigInteger('posts_id');
            $table->foreign('posts_id', 'fk_posttags_posts')->references('id')->on('posts')->onDelete('cascade')->onUpdate('restrict');
            $table->unsignedBigInteger('tags_id');
            $table->foreign('categorias_id', 'fk_posttags_tags')->references('id')->on('tags')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tags');
    }
}
