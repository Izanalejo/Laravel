<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Factories\HasFactory;

    class Comensal extends Model{
        use HasFactory;

        protected $primaryKey = "id";
        public $timestamps = false;

        Protected $fillable = [
            'nombre',
            'email',
            'telefono',
            'fecha',
            'mesa_ip'
        ];

        public function mesa(){
            return $this->belongsTo(Mesa::class); //Com que el nom del camp de la PK de Mesa és id, no cal posar-lo a continuació de Mesa:class
        }
    }
?>