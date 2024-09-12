<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_Documento;

class TipoDocumentoController extends Controller
{
    
    public function index(){
        $tipoDocumento = Tipo_Documento::all();
        return view('tipoDocumento.index', [
            'tipoDouemtno' => $tipoDocumento,
        ]);

    }

    public function create()
    {
        return view('tipodocumento.create');
    }

}
