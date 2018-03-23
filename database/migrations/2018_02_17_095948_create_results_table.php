<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('indexNO');
            $table->string('session_id');
            $table->integer('class_id');
            $table->integer('exam_id');
            $table->integer('subject_id');
            $table->tinyInteger('status')->default('0');
            $table->integer('written')->nullable();
            $table->integer('mcq')->nullable();
            $table->integer('practical')->nullable();
            $table->integer('createrUserId');
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
        Schema::dropIfExists('results');
    }
}
