<?php

namespace Database\Seeders;

use App\Models\Alumne;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alumne::factory()->count(20)->create();
    }
}
