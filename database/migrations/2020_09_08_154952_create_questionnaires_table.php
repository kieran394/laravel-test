<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaires', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('open')->default(true);  
            $table->bigInteger('question_id_q1')->unsigned();
            $table->bigInteger('question_id_q2')->unsigned();
            $table->bigInteger('question_id_q3')->unsigned();
            $table->bigInteger('question_id_q4')->unsigned();
            $table->timestamps();
        });   

        Schema::table('questionnaires', function($table) {
            $table->foreign('question_id_q1')->references('id')->on('questions');
        });
        Schema::table('questionnaires', function($table) {
            $table->foreign('question_id_q2')->references('id')->on('questions');
        });
        Schema::table('questionnaires', function($table) {
            $table->foreign('question_id_q3')->references('id')->on('questions');
        });
        Schema::table('questionnaires', function($table) {
            $table->foreign('question_id_q4')->references('id')->on('questions');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionnaires');
    }
}
