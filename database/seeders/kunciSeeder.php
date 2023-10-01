<?php

namespace Database\Seeders;

use App\Models\Kunci;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class kunciSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kunci::insert([
            'kunci' => Hash::make('chikatrisnadewi123')
        ]);
    }
}
