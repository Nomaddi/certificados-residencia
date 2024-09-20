<?php

namespace App\Http\Controllers\Tenancy;

use App\Http\Controllers\Controller;
use App\Models\tSolicitante;
use Illuminate\Http\Request;

class tSolicitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tSolicitante = tSolicitante::all();
        return view('Tenancy.tSolicitante.index', compact('tSolicitante'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Tenancy.tSolicitante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'id'=>'required',
            'tipoSolicitante'=>'required',
        ]);

        tSolicitante::create($data);
        return Redirect()->route('tSolicitante.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(tSolicitante $tSolicitante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tSolicitante $tSolicitante)
    {
        return Redirect()->route('tSolicitante.edit', compact('tSolicitante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tSolicitante $tSolicitante)
    {
        $data = $request->validate([
            'id'=>'required',
            'tipoSolicitante'=>'required',
        ]);

        $tSolicitante->update($data);
        return redirect()->route('tSolicitante.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tSolicitante $tSolicitante)
    {
        $tSolicitante->delete();
        return redirect()->route('tSolicitante.index');
    }
}
