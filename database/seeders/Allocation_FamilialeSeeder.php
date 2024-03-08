<?php

namespace Database\Seeders;

use App\Models\Allocation_Familiale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Allocation_FamilialeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Allocation_Familiale::factory()
            ->count(10)
            ->create();
    }
}
