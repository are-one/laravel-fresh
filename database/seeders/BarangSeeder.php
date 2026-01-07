<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        for ($i=1; $i <= 50; $i++) {
            Barang::create([
                'user_id' => $user->id,
                'name' => 'Barang '.$i,
                'description' => 'Deskripsi Barang '.$i,
            ]);
        }
    }
}
