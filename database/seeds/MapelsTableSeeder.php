<?php

use Illuminate\Database\Seeder;

class MapelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('mapels')->truncate();
      $mapels = [
        ['name' => 'MTK', 'fullname'=> 'Matematika'],
        ['name' => 'IND', 'fullname'=> 'Bahasa Indonesia'],
        ['name' => 'ING', 'fullname'=> 'Bahasa Inggris'],
        ['name' => 'PPKN', 'fullname'=> 'Pendidikan Pancasila & Kewarganegaraaan'],
        ['name' => 'IPS', 'fullname'=> 'Ilmu Pendidikan Sosial'],
        ['name' => 'PENJASKES', 'fullname'=> 'Pendidikan Jasmani & Kesehatan'],
      ];

      foreach ($mapels as $item) {
        App\Mapel::create($item);
      }
    }
}
