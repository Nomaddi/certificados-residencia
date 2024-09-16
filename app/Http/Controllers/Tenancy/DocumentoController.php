<?php

namespace App\Http\Controllers\tenancy;

use App\Http\Controllers\Controller;
use App\Models\Tipo_Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     /*  $tipo_documento = Tipo_Documento::all();
        return view('Tenancy.documentos.index', compact($tipo_documento));
       */ 
        return view('Tenancy.documentos.index');

       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Tenancy.documentos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'id'=>'required',
            'n_documento'=> 'required'
        ]);
        Tipo_Documento::create($data);
            
        return redirect()->route('documento.index');
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tipo_Documento $tipo_documento)
    {
        return view('documento.edit', [
            'Documento' =>$tipo_documento,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tipo_Documento $tipo_documento)
    {
        $tipo_documento->update($request->all());
        return view('documento.index');    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tipo_Documento $tipo_documento)
    {
        $tipo_documento->delete();
        return view('documento.index');
    }
}
