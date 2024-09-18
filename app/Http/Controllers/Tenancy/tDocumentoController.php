<?php

namespace App\Http\Controllers\Tenancy;

use App\Http\Controllers\Controller;
use App\Models\tDocumento;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class tDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tDocumento = tDocumento::all();
        return view('Tenancy.documentos.index', compact('tDocumento'));
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
            'id' => 'required',
            'tipoDocumento'=> 'required',
        ]);
        tDocumento::create($data);

        return redirect()->route('documento.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(tDocumento $tDocumento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tDocumento $tDocumento)
    {
        return view('Tenancy.documentos.edit', compact('tDocumento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tDocumento $tDocumento)
    {
       
       $data= $request->validate([
            'id'=> 'required',
            'tipoDocumento' => 'required',

        ]);
        $tDocumento->update($data);
        return redirect()->route('documento.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tDocumento $tDocumento)
    {
        $tDocumento->delete();
        return redirect()->route('documento.index');
    }
}
