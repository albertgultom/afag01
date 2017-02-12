<?php

use Illuminate\Database\Seeder;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

      DB::table('quizzes')->truncate();
      foreach ((range(1, 50)) as $index) {
        DB::table('quizzes')->insert([
          'mapel_id'=> rand(1, 6),
          'stage_id'=> rand(1, 6),
          'type'    => 1,
          'name'    => $faker->name(),
          'category'=> 'Try out',
          'detail'  => $faker->text($maxNbChars = 20),
          'duration'=> '00:00:30'
        ]);
        DB::table('quizzes')->insert([
          'mapel_id'=> rand(1, 6),
          'stage_id'=> rand(1, 6),
          'type'    => 2,
          'name'    => $faker->name(),
          'category'=> 'Kuis',
          'detail'  => $faker->text($maxNbChars = 20),
          'duration'=> '00:00:15'
        ]);
        DB::table('quizzes')->insert([
          'mapel_id'=> rand(1, 6),
          'stage_id'=> rand(1, 6),
          'type'    => 3,
          'name'    => $faker->name(),
          'category'=> 'Ujian',
          'detail'  => $faker->text($maxNbChars = 20),
          'duration'=> '00:00:45'
        ]);
      }
    }
}
