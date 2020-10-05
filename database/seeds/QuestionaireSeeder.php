<?php

use App\Models\Questionnaire;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class QuestionaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seed question
        for($i =0; $i<3; $i++){                      
            DB::table('questionnaires')->insert([
                'name' => "questionaire_".$i,
                'open' => true,
                'question_slug' => 'k',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        } 
    }
}
