<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Address::class, 2)->create()->each(
            function(App\Address $address)
            {
                $address->fans()->attach([
                    App\Fan::all()->random()->_id,
                    App\Fan::all()->random()->_id,
                ]);

                $address->gases()->attach([
                    App\Gas::all()->random()->_id,
                ]);

                $address->lights()->attach([
                    App\Light::all()->random()->_id,
                    App\Light::all()->random()->_id,
                ]);

                $address->notifications()->attach([
                    App\Notification::all()->random()->_id,
                    App\Notification::all()->random()->_id,
                    App\Notification::all()->random()->_id,
                ]);

                $address->users()->attach([
                    App\User::all()->random()->_id,
                    App\User::all()->random()->_id,
                ]);

                $address->schedules()->attach([
                    App\Schedule::all()->random()->_id,
                    App\Schedule::all()->random()->_id,
                    App\Schedule::all()->random()->_id,
                    App\Schedule::all()->random()->_id,
                    App\Schedule::all()->random()->_id,
                    App\Schedule::all()->random()->_id,
                    App\Schedule::all()->random()->_id,
                ]);
            }
        );
    }
}
