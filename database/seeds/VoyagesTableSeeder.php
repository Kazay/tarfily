<?php

use Illuminate\Database\Seeder;

class VoyagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Voyage::class, 50)->create();
    }
}
