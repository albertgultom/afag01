<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(MapelsTableSeeder::class);
        $this->call(StagesTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(QuizzesTableSeeder::class);
        $this->call(QuestionQuizTableSeeder::class);
    }
}
