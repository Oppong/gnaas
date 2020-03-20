<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@example.com',
                'is_admin'=>'1',
               'password'=> bcrypt('amponsah'),
            ],
            [
               'name'=>'Admin',
               'email'=>'amponsahoppong@gmail.com',
                'is_admin'=>'1',
               'password'=> bcrypt('year2019/2020'),
            ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
