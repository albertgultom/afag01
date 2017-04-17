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
        ['name' => '1', 'alias' => 'I', 'colour'=>'64DD17'],
        ['name' => '2', 'alias' => 'II', 'colour'=>'FFAB00'],
        ['name' => '3', 'alias' => 'III', 'colour'=>'00B8D4'],
        ['name' => '4', 'alias' => 'IV', 'colour'=>'2962FF'],
        ['name' => '5', 'alias' => 'V', 'colour'=>'AA00FF'],
        ['name' => '6', 'alias' => 'VI', 'colour'=>'304FFE'],
      ];

      foreach ($items as $item) {
        App\Stage::create($item);
      }
    }
}
