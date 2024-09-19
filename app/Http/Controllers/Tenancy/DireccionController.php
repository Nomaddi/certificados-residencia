<?php

namespace App\Http\Controllers\Tenancy;

use App\Http\Controllers\Controller;
use App\Models\Direccion;
use Illuminate\Http\Request;
use PhpParser\Node\Scalar\MagicConst\Dir;

class DireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $direccion = Direccion::all();
        return view('Tenancy.direcciones.index', compact('direccion'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Tenancy.direccion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'id'=> 'required|unique:Direcciones',
            'conjunto' => 'nullable',
            'casa/apto' => 'nullables',

        ]);
        Direccion::create($data);
        return redirect()->route('direccion.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Direccion $direccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Direccion $direccion)
    {
        return view('Tenancy.direccion.edit', compact('direccion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Direccion $direccion)
    {
        $data = $request->validate([
            'id'=> 'required|unique:Direcciones',
            'conjunto' => 'nullable',
            'casa/apto' => 'nullable',

        ]);
        $direccion->update($data);
        return redirect()->route('direccion.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Direccion $direccion)
    {
        $direccion->delete();
        return redirect()->route('direcccion.index');
    }
}
