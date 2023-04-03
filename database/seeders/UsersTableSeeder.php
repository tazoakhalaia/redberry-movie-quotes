<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'janedoe@example.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Bob Smith',
                'email' => 'bobsmith@example.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Alice Jones',
                'email' => 'alicejones@example.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Mike Johnson',
                'email' => 'mikejohnson@example.com',
                'password' => Hash::make('password')
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
