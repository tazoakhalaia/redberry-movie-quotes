<?php

namespace App\Console\Commands;

use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CreateUserCommand extends Command
{
    protected $signature = 'create:user';

    protected $description = 'Create New User';

    public function handle(): void
    {

        $name = $this->ask('Enter your name');
        $email = $this->ask('Enter the user email');
        $password = $this->secret('Enter the user password:');

        $validator = Validator::make([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ], [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3',
        ]);

        if ($validator->fails()) {
            $this->error('There were errors with your input:');
            foreach ($validator->errors()->all() as $error) {
                $this->error('- ' . $error);
            }
            return;
        }

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->save();
        $this->info('User created successfully!');
    }
}
