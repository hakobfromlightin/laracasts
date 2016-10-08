<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillLessonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_lesson', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('skill_id')->unsigned()->index();
            $table->foreign('skill_id')
                ->references('id')
                ->on('skills')
                ->onDelete('cascade');

            $table->integer('lesson_id')->unsigned()->index();
            $table->foreign('lesson_id')
                ->references('id')
                ->on('lessons')
                ->onDelete('cascade');

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
        Schema::dropIfExists('skill_lesson');
    }
}
