<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Categoria::class, 10)->create([
          'conta_id' => 1
        ]);

        factory(\App\Categoria::class, 10)->create([
          'conta_id' => 2
        ]);
    }
}
