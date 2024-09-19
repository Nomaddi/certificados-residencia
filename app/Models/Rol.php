<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function permisios()
    {
        return $this->belongsToMany(Permiso::class);
    }
    
    public function solicitante()
    {
        return $this->hasMany(Solicitante::class,'rol_id','id');
    }



}
