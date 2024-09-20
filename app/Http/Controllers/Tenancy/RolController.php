<?php

namespace App\Http\Controllers\Tenancy;

use App\Http\Controllers\Controller;
use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rol = Rol::all();
        return view('Tenancy.rol.index', compact('rol'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Tenancy.rol.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'id'=>'required',
            'nombreRol'=> 'required',
        ]);
        Rol::create($data);
        return redirect()->route('rol.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rol $rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rol $rol)
    {
        return view('Tenancy.rol.edit', compact('rol'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rol $rol)
    {
        $data = $request->validate([
            'id'=>'required',
            'nombreRol'=> 'required',
        ]);
        $rol->update($data);
        return redirect()->route('rol.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rol $rol)
    {
        $rol->delete();
        return redirect()->route('rol.index');
    }
}
