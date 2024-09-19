<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;

    protected $guarded =[];
 // funcion que conecta la PK con la FK, con una relacion 1 a muchos, donde
 // 1 barrio puede tener muchas direcciones.
    public function barrio()
    {
        return $this->belongsTo(barrio::class, 'barrio_id','id');

    }

    public function solicitudes()
    {
        return $this->hasMany(Solicitud::class, 'direcccion_id','id');

    }

}
