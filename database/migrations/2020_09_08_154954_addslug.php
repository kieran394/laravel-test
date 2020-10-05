<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AddSlug extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /* Schema::create('questionnaires', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('open')->default(true);      
            $table->timestamps();
        });*/
        
        Schema::table('questionnaires', function (Blueprint $table) {
            $table->string('question_slug')->default();
            //$table->string('question_slug')->unique();
        });

         /*$questionnaires = DB::table('questionnaires')->get();
         //var_dump("name "."a");
         foreach($questionnaires as $questionnaire)
         {
             var_dump("name ".$questionnaire->name);
            $questionnaire->question_slug =  Str::slug($questionnaire->name,'-');
            $questionnaire->save();
         }*/
        
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
