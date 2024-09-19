<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function solicitante()
    {
        return $this->hasMany(Solicitante::class,'genero_id','id');
    }




}
