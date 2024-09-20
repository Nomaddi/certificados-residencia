<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tSolicitante extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function solicitante()
    {
        return $this->hasMany(Solicitante::class, 'tSolicitante_id', 'id');
        //n:1
    }

}
