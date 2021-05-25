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
                'name' => 'isUser',
                'username' => 'isUser',
                'email' => 'user@yahoo.com',
                'password' => bcrypt('12345678'),
                'photo' => 'user.jpg',
                'roles_id' => 2
            ],
            [
                'name' => 'isAdmin',
                'username' => 'isAdmin',
                'email' => 'admin@yahoo.com',
                'password' => bcrypt('12345678'),
                'photo' => 'admin.jpg',
                'roles_id' => 1
            ]
        ];

        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
