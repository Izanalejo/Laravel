<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio'
    ];
    public function mesas()
    {
        return $this->belongsToMany(
            Mesa::class, // 1. Model relacionat
            'menus_mesas', // 2. Nom de la taula pivot (amb aquest nom, no caldria)
            'mesa_id', // 3. FK del model actual a la pivot (idem)
            'menu_id' // 4. FK del model relacionat a la pivot (idem)
        );
    }
}
