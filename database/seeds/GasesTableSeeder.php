<?php

use Illuminate\Database\Seeder;

class GasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Gas::class, 2)->create();
    }
}
