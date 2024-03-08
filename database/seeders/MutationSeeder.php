<?php

namespace Database\Seeders;

use App\Models\Mutation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MutationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Mutation::factory()
            ->count(10)
            ->create();
    }
}
