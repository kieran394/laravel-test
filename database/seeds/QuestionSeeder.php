<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
                [
                'order_key' => 11,
                'questionnaire_id' => 1001,
                'question' => 'Name',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'order_key' => 22,
                    'questionnaire_id' => 1002,
                    'question' => 'Age',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'order_key' => 33,
                    'questionnaire_id' => 1003,
                    'question' => 'Gender',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'order_key' => 44,
                    'questionnaire_id' => 1004,
                    'question' => 'Football team you support',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'order_key' => 55,
                    'questionnaire_id' => 1005,
                    'question' => 'Rugby team you support',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'order_key' => 66,
                    'questionnaire_id' => 1006,
                    'question' => 'American Football team support',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]]    
        );

       
    }
}
