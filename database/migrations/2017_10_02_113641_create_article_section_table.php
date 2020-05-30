<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_section', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('article_id')->nullable()->index();
            $table->unsignedInteger('section_id')->nullable()->index();
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('Cascade');
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('Cascade');
            $table->unique(['article_id','section_id']);
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
        Schema::dropIfExists('article_section');
    }
}
