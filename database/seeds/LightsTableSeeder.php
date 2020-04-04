<?php

use Illuminate\Database\Seeder;

class LightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Light::class, 4)->create();
    }
}
