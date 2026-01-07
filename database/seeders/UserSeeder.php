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
        User::create([
            'name' => 'Arwan',
            'email' => 'arwan@gmail.com',
            'password' => bcrypt('password'),
        ]);

        for ($i=1; $i <= 10; $i++){
            User::create([
                'name' => "User $i",
                'email' => "arwan$i@gmail.com",
                'password' => bcrypt('password'),
            ]);
        }
    }
}
