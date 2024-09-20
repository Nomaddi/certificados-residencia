<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    use HasFactory;
    protected $guarded = [];

    //Relacion con tabla solicitud
    public function solicitud()
    {
        return $this->hasOne(Solicitud::class, 'numeroIdentificacion_id', 'numeroIdentificacion');
         // Relación 1:1
    }

    public function tSolicitantes()
    {
        return $this->belongsTo(tSolicitante::class,'tSolicitante_id','id');
         // Relación 1:N
    }

    public function tDocumento()
    {   //1 a 1
        return $this->hasOne(tDocumento::class,'solicitante_id','id');
    }
//
    public function nEstudio()
    { //n a 1
        return $this->belongsTo(nEstudio::class,'nEstudio_id','id');
    }
    public function genero()
    {
        return $this->belongsTo(Genero::class,'genero_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
