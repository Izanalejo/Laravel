<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mesa;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mesas = Mesa::all();
        $numMenus = 10;
        Menu::factory($numMenus)->create(); //Crea 10 menus
        //Ara asignarem menus aleatoris a cada taula menys una, tants com el número decomensals que té cadascuna
        foreach ($mesas as $mesa) {
            $numComensals = $mesa->comensals->count();
            $mesaMenus = Menu::all()->random($numComensals); //Creem una llista de menusaleatoris per als comensals de la taula
            $mesa->menus()->attach($mesaMenus); //Els afegim a la BBDD (aniran a la taulapivot menu_mesa)
        }
    }
}
