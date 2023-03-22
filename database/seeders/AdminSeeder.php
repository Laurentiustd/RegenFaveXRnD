<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin123',
            'city' => 'Jakarta',
            'birthdate'=>'1111-11-11',
            'number'=>'00812345',
            'gender'=>'Male',
            'password' => Hash::make('admin123'),
            'role' =>'admin',
        ]);
    }
}
