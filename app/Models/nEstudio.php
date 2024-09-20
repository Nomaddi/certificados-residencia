<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nEstudio extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function solicitantes()
    {
        return $this->hasMany(Solicitante::class,'nEstudio_id','id');
    }



}
