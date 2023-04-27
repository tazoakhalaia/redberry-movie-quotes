<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateUserCommand extends Command
{
    
    protected $signature = 'create:user';

    protected $description = 'Create New User';

    public function handle(): void
    {
        $name = $this->ask('Enter your name');
        $email = $this->ask('Enter the user email');
        $password = $this->secret('Enter the user password:');

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->save();
        $this->info('User created successfully!');
    }
}
