<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->integer('length')->nullable();
            $table->integer('times_watched')->nullable();
            $table->integer('times_coded')->nullable();
            $table->enum('type', ['single', 'series'])->nullable();
            $table->boolean('archived')->nullable();
            $table->boolean('available')->nullable();
            $table->boolean('downloaded')->nullable();
            $table->boolean('watched')->nullable();
            $table->boolean('coded')->nullable();
            $table->timestamp('due_to')->nullable();
            $table->timestamp('recorded_at')->nullable();
            $table->timestamp('first_watched_at')->nullable();
            $table->timestamp('last_watched_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
