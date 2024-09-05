<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Eric',
            'email' => 'eric@gmail.com',
            'password' =>Hash::make('12344565')
        ]);

        User::create([
            'name' => 'Hola',
            'email' => 'easdsad@gmail.com',
            'password' =>Hash::make('12344565')
        ]);

        User::create([
            'name' => 'Chao',
            'email' => 'asdafffc@gmail.com',
            'password' =>Hash::make('12344565')
        ]);

        User::create([
            'name' => 'Trabajo',
            'email' => 'assccccc@gmail.com',
            'password' =>Hash::make('12344565')
        ]);
    }
}
