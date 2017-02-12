<?php

use Illuminate\Database\Seeder;

class QuestionQuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();
      
      DB::table('question_quiz')->truncate();
      foreach ((range(1, 150)) as $index) {
        foreach ((range(1, 20)) as $value) {
          DB::table('question_quiz')->insert([
            'quiz_id'    => $index,
            'question_id'=> rand(1, 300),
            'order'      => $value
          ]);
        }
      }
    }
}
