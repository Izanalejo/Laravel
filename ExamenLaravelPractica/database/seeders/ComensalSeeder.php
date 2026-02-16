<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mesa;
use App\Models\Comensal;

class ComensalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mesas = Mesa::all(); //Obtenim totes les taules existents. Per això és important executar abans el seeder de Mesa
        
        // Crea 20 comensals, i a més assigna a cadascun un mesa_id aleatori de la colecció $mesas
        Comensal::factory()->count(20)->recycle($mesas)->create();
        }

}
