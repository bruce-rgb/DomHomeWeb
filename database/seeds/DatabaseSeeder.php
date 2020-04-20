<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SchedulesTableSeeder::class);
        $this->call(LightsTableSeeder::class);
        $this->call(FansTableSeeder::class);
        $this->call(NotificationsTableSeeder::class);
        $this->call(GasesTableSeeder::class);
        $this->call(AddressesTableSeeder::class);
    }
}
