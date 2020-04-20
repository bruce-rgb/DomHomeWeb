<?php

use Illuminate\Database\Seeder;
use App\Address;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 3)->create();

        App\User::create([
            //'id' => 3,
            'name' => 'Bruce',
            'last_name' => 'Robinson',
            'email' => 'bruce123@live.com.mx',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'address_id' => null,
            //'address_id' => Address::all()->random()->_id,
        ]);

    }
}
