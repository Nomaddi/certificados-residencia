<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{
    use HasFactory;
    protected $guarded =[];

    // funcion que conecta la PK con la FK, con una relacion 1 a muchos
    public function direcciones()
    {
        return $this->hasMany(Direccion::class, 'barrio_id','id');

    }

    public function solicitudes ()
    {
        return $this->hasMany(Solicitud::class, 'barrio_id','id');

    }



}
