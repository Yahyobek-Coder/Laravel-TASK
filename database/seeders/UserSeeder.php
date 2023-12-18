<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    
    public function run()
    {
        User::create([
            'name' => 'Manager',
            'role_id' => 1,
            'email' => 'manage@company.com',
            'password' => hash::make('secret'),
        ]);

        User::create([
            'name' => 'Example Client',
            'role_id' => 2,
            'email' => 'client@company.com',
            'password' => hash::make('secret'),
        ]);
    }
}
