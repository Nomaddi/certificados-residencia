<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function roles()
    {
        return $this->belongsTo(Role::class, 'id_rol', 'id');
    }
}
