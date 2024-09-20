<?php

namespace App\Http\Controllers\Tenancy;

use App\Http\Controllers\Controller;
use App\Models\Permiso;
use Illuminate\Http\Request;

class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permiso = Permiso::all();
        return view('Tenancy.permiso.index', compact('permiso'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Tenancy.permiso.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
                'id'=>'required',
                'tipoPermiso' => 'required',
        ]);
        Permiso::create($data);
        return redirect()->route('permiso.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Permiso $permiso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permiso $permiso)
    {
        return view('Tenancy.permiso.edit', compact('permiso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permiso $permiso)
    {
        $data = $request->validate([
            'id'=>'required',
                'tipoPermiso' => 'required',
        ]);
        $permiso->update($data);
        return redirect()->route('permiso.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permiso $permiso)
    {
        $permiso->delete();
        return redirect()->route('permiso.index');
    }
}
