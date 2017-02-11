<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('mapel_id')->unsigned();
            $table->integer('stage_id')->unsigned();
            $table->tinyInteger('type')->unsigned();
            $table->tinyInteger('level')->unsigned()->default('1');
            $table->text('question');
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->text('answer_a')->nullable();
            $table->text('answer_b')->nullable();
            $table->text('answer_c')->nullable();
            $table->text('answer_d')->nullable();
            $table->text('answer_e')->nullable();
            $table->string('image_a')->nullable();
            $table->string('image_b')->nullable();
            $table->string('image_c')->nullable();
            $table->string('image_d')->nullable();
            $table->string('image_e')->nullable();
            $table->tinyInteger('answer_choice')->unsigned()->nullable();
            $table->text('answer_essay')->nullable();
            $table->text('explanation')->nullable();
            $table->tinyInteger('point')->unsigned()->default('1');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
