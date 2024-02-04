<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $users = array(
            [
                'name' => 'Ken',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123'),
                'foto' => '/img/admin.jpeg',
                'level' => 1
            ],
            [
                'name' => 'Norris',
                'email' => 'kasir1@gmail.com',
                'password' => bcrypt('123'),
                'foto' => '/img/kasir.jpeg',
                'level' => 2
            ]
        );

        array_map(function (array $user) {
            User::query()->updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }, $users);
    }
}
