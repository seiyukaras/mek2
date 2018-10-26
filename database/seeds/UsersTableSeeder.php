<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create([
            'name' => 'Admin',
            'email' => 'meka@mekacuba.com',
            'username' => 'Meka Bar',
            'password' => bcrypt('C@stle.2125+-*/10'),
        ]);
    }
}
