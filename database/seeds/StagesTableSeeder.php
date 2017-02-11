<?php

use Illuminate\Database\Seeder;

class StagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('stages')->truncate();
      $items = [
        ['name' => '1', 'alias'=> 'Satu'],
        ['name' => '2', 'alias'=> 'Dua'],
        ['name' => '3', 'alias'=> 'Tiga'],
        ['name' => '4', 'alias'=> 'Empat'],
        ['name' => '5', 'alias'=> 'Lima'],
        ['name' => '6', 'alias'=> 'Enam'],
      ];

      foreach ($items as $item) {
        App\Stage::create($item);
      }
    }
}
