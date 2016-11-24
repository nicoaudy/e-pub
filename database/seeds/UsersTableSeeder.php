<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert(array(
            array(
                'name'  => 'Admin',
                'role_id'   => 1,
                'email' => 'admin@example.com',
                'password'  => Hash::make('password')
            ),
            array(
                'name'  => 'Customer',
                'role_id'   => 2,
                'email' => 'customer1@example.com',
                'password'  => Hash::make('password')
            ),
        ));
    }
}
