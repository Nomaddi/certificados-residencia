<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tDocumento extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function solicitante()
    {
        return $this->belongsTo(Solicitante::class,'solicitante_id','id');
    }


}
