<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        $user->products()->create([
            'name' => 'Piring Cantik',
            'description' => 'Piring dengan desain yang sangat cantik dan elegan.',
            'price' => 75000,
        ]);
    }
}
