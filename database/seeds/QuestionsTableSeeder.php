<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();
      DB::table('questions')->truncate();

      $_type = rand(1, 2);

      foreach ((range(1, 3000)) as $index) {
        DB::table('questions')->insert([
          'mapel_id'=> rand(1, 6),
          'stage_id'=> rand(1, 6),
          'type'    => 1,
          'level'   => rand(1, 3),
          'question'=> $faker->paragraphs($nb = 15, $asText = true),
          'answer_a'     => $faker->text($maxNbChars = 50),
          'answer_b'     => $faker->text($maxNbChars = 50),
          'answer_c'     => $faker->text($maxNbChars = 50),
          'answer_d'     => $faker->text($maxNbChars = 50),
          'answer_e'     => $faker->text($maxNbChars = 50),
          'answer_choice'=> rand(1, 5),
          'explanation' => $faker->realText($maxNbChars = 60)
        ]);
      }
      foreach ((range(1, 3000)) as $index) {
        DB::table('questions')->insert([
          'mapel_id'=> rand(1, 6),
          'stage_id'=> rand(1, 6),
          'type'    => 2,
          'level'   => rand(1, 3),
          'question'=> $faker->paragraphs($nb = 15, $asText = true),
          'answer_essay' => $faker->realText($maxNbChars = 20),
          'explanation' => $faker->realText($maxNbChars = 60)
        ]);
      }
    }
}
