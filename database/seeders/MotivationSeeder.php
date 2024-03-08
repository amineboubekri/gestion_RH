<?php

namespace Database\Seeders;

use App\Models\Motivation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotivationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Motivation::factory()
            ->count(10)
            ->create();
    }
}
