<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Victor Sanchez';
        $user->email = 'test@example.com';
        $user->password = bcrypt('123456789');

        $user->save();

        $user2 = new User();
        $user2->name = 'Iris Godoy';
        $user2->email = 'test2@example.com';
        $user2->password = bcrypt('123456789');

        $user2->save();
    }
}
