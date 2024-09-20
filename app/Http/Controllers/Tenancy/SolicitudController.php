<?php

namespace App\Http\Controllers\Tenancy;

use App\Http\Controllers\Controller;
use App\Models\Solicitud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $solicitud = Solicitud::all();
        return view('Tenancy.solicitudes.index', compact('solicitud'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Tenancy.Solicitudes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
           'id'=>'required|unique:solicitudes',
           'fechaSolicitud'=>'required',
           'fechaActual'=>'required',
           'ubicacion' =>'required',
            'evidenciapdf'=>'required',
        ]);
        Solicitud::create($data);
        return Redirect()->route('solicitud.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Solicitud $solicitud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Solicitud $solicitud)
    {
        return Redirect()->route('solicitud.edit', compact('solicitud'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Solicitud $solicitud)
    {
        $data = $request->validate([
            'id'=>'required|unique:solicitudes',
            'fechaSolicitud'=>'required',
            'fechaActual'=>'required',
            'ubicacion' =>'required',
             'evidenciapdf'=>'required',
         ]);
         //realizar actualizacion de evidenciaPDF 
         $solicitud->update($data);
         return redirect()->route('solicitud.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Solicitud $solicitud)
    {
        //se debe eliminar primero el pdf
        $solicitud->delete();
        return redirect()->route('solicitud.index');
    }
}
