<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionaireQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionaire_questions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('questionaire_id')->unsigned();
            $table->bigInteger('question_id')->unsigned();
            //$table->foreign('questionaire_id')->constrained('questionnaires');
            //$table->foreign('question_id')->constrained('questions');
            $table->timestamps(); 
        });

                Schema::table('questionaire_questions', function($table) {
                    $table->foreign('questionaire_id')->references('id')->on('questionnaires');
                });
                Schema::table('questionaire_questions', function($table) {
                    $table->foreign('question_id')->references('id')->on('questions');
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionaire_questions');
    }
}
