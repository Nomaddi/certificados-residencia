<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Documento extends Model
{
    use HasFactory;
    //datos que se complementan
    protected $fillable =[];
    //datos no complementables
    protected $guarded=[];
    //regla a cumplir
    protected $cast=[];
    //ocultar contenido 
    protected $hidden=[
        'id_tipoDocumento'
    ];

}
