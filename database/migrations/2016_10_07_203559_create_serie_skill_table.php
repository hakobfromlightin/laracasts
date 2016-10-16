<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSerieSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serie_skill', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number')->unsigned()->index();

            $table->integer('serie_id')->unsigned()->index();
            $table->foreign('serie_id')
                ->references('id')
                ->on('series')
                ->onDelete('cascade');

            $table->integer('skill_id')->unsigned()->index();
            $table->foreign('skill_id')
                ->references('id')
                ->on('skills')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serie_skill');
    }
}
