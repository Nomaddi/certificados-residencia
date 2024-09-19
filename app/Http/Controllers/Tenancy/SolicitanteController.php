<?php

namespace App\Http\Controllers\Tenancy;

use App\Http\Controllers\Controller;
use App\Models\Solicitante;
use Illuminate\Http\Request;

class SolicitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $solicitante = Solicitante::all();
        return view('Tenancy.solicitantes.index', compact('solicitante'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Tenancy.solicitantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'id' =>'required|unique:Solicitantes',
            'fechaRegistro'=>'required',
            'nombre_1'=>'required',
            'nombre_2'=>'required',
            'apellido_1'=>'required',
            'apellido_2'=>'required',
            'correoElectronico'=>'required|unique:Solicitantes',
            'telefonoContacto'=>'required',
            'numeroIdentificacion'=>'required|unique:Solicitantes',
            'ciudadExpedicion'=>'required|unique:Solicitantes',
            'fechaNacimiento'=>'required',

        ]);
        Solicitante::create($data);
        return Redirect()->route('solicitante.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Solicitante $solicitante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Solicitante $solicitante)
    {
        return Redirect()->route('solicitante.edit', compact('solicitante'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Solicitante $solicitante)
    {
        $data = $request->validate([
            'id' =>'required|unique:Solicitantes',
            'fechaRegistro'=>'required',
            'nombre_1'=>'required',
            'nombre_2'=>'required',
            'apellido_1'=>'required',
            'apellido_2'=>'required',
            'correoElectronico'=>'required|unique:Solicitantes',
            'telefonoContacto'=>'required',
            'numeroIdentificacion'=>'required|unique:Solicitantes',
            'ciudadExpedicion'=>'required|unique:Solicitantes',
            'fechaNacimiento'=>'required',

        ]);
        $solicitante->update($data);
        return redirect()->route('solicitante.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Solicitante $solicitante)
    {
        $solicitante->delete();
        return redirect()->route('solicitante.index');
    }
}
