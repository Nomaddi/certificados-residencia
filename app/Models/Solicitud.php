<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    protected $guarded =[];
    // funcion que conecta la PK con la FK, con una relacion 1 a muchos, donde
    // 1 barrio puede tener muchas solicitudes.
    public function barrio()
    {
        return $this->belongsTo(barrio::class, 'barrio_id','id');
   
    }
//relacion con tabla direcciones
    public function direccion()
    {
        return $this->belongsTo(Direccion::class, 'direccion_id','id');
    }
    //Relacion con tabla solicitantes
    public function solicitante()
    {
        return $this->belongsTo(Solicitante::class, 'numeroIdentificacion_id','id');
    }





}
