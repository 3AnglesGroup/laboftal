<?php

use Illuminate\Database\Seeder;
use App\Marca;

class MarcaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $marca = new Marca();
      $marca->name = 'Topcon';
      $marca->save();

      $marca = new Marca();
      $marca->name = 'Elektron eye technology';
      $marca->save();

      $marca = new Marca();
      $marca->name = 'Keeler';
      $marca->save();

      $marca = new Marca();
      $marca->name = 'Lightmed';
      $marca->save();
      

      $marca = new Marca();
      $marca->name = 'Ocular';
      $marca->save();
      $marca = new Marca();
      $marca->name = 'Cima';
      $marca->save();
    }
}
