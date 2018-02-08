<?php

use Illuminate\Database\Seeder;

class ContasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Conta::class, 2)->create();
    }
}
