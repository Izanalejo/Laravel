<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mesa extends Model{
    use HasFactory; //Indiquem que tindrà una factory
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'capacidad'
    ];

    public function comensals()
    {
        return $this->hasMany(Comensal::class); //Se suposa que el model Comensal tindrà un camp mesa_id, si no l'hauriem de posar.
    }
    public function menus()
    {
        return $this->belongsToMany(
            Menu::class, // 1. Model relacionat
            'menu_mesa', // 2. Nom de la taula pivot. En aquest cas no caldria perquèel nom segueix la norma
            'mesa_id', // 3. FK del model actual a la pivot. En aquest cas nocaldria perquè el nom segueix la norma
            'menu_id' // 4. FK del modelo relacionat a la pivot. En aquest cas nocaldria perquè el nom segueix la norma
        );
    }
}
