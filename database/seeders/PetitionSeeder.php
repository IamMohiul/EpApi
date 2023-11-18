<?php

namespace Database\Seeders;

use App\Models\petition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        petition::factory()->times(50)->create();
    }
}
