<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_list = [
            [
                'id' => 1,
                'lname' => 'Jorena',
                'fname' => 'Lopez',
                'address' => 'Bohol',
                'phone' => '09245125',
                'email' => 'Jorena@email.com',
                'password' => bcrypt('Jorena')
            ],
            [
                'id' => 2,
                'lname' => 'Kitty',
                'fname' => 'Whos',
                'address' => 'Cadana',
                'phone' => '02144124',
                'email' => 'Whos@email.com',
                'password' => bcrypt('Whos')
            ],
            [
                'id' => 3,
                'lname' => 'Mickey',
                'fname' => 'Moouse',
                'address' => 'USA',
                'phone' => '12515',
                'email' => 'Moouse@email.com',
                'password' => bcrypt('Moouse')
            ],
        ];
        foreach ($user_list as $user) {
            \App\User::create($user);

        }
    }
}
