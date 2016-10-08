<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonSerieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_serie', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('number')->unsigned()->index();

            $table->integer('lesson_id')->unsigned()->index();
            $table->foreign('lesson_id')
                ->references('id')
                ->on('lessons')
                ->onDelete('cascade');

            $table->integer('serie_id')->unsigned()->index();
            $table->foreign('serie_id')
                ->references('id')
                ->on('series')
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
        Schema::dropIfExists('lesson_serie');
    }
}
