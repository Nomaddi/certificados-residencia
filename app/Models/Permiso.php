<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function rol(){
        return $this->belongsToMany(Rol::class);
    }

}
