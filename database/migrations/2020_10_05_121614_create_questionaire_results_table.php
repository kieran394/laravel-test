<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionaireResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionaire_results', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->Integer('age');            
            $table->string('gender');
            $table->string('favouriteSportTeam');
            $table->bigInteger('questionaire_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('questionaire_results', function($table) {
            $table->foreign('questionaire_id')->references('id')->on('questionnaires');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionaire_results');
    }
}
