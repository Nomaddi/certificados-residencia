<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Documento extends Model
{
    use HasFactory;
    
    //datos no complementables
    protected $guarded=[];
   
    protected $hidden=[
        'id_tipoDocumento'
    ];  

}
