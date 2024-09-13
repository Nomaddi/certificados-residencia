<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_Documento;

class TipoDocumentoController extends Controller
{
    
    public function index(){
        $documento = Tipo_Documento::all();
        return view('documento.index', [
            'Douemtno' => $documento,
        ]);

    }

    public function create()
    {      
        return view('documento.create');
    }
   
    public function store( Request $request)
    {

        $request->validate([
            'tipoDocumento'=>'required',
        ]);
        Tipo_Documento::create($request ->all());
            
        return redirect()->route('documento.index');

    }
    
    public function edit(Tipo_Documento $documento)
    {
        return view('documento.index', [
            'documento' =>$documento,
        ]);
    }

    public function update(Request $request, Tipo_Documento $documento)
    {
        $documento->update($request->all());
        return view('documento.index');    
    }

    public function destroy(Tipo_Documento $documento)
    {
        $documento->delete();
        return view('documento.index');
    }

}
