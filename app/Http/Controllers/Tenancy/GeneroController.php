<?php

namespace App\Http\Controllers\Tenancy;

use App\Http\Controllers\Controller;
use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genero = Genero::all();
        return view('Tenancy.genero.index', compact('genero'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Tenancy.genero.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'id'=>'required',
            'nombreGenero'=>'required',
        ]);

        Genero::create($data);
        return Redirect()->route('genero.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genero $genero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genero $genero)
    {
        return view('Tenancy.genero.create', compact('genero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genero $genero)
    {
        $data = $request->validate([
            'id'=>'required',
            'nombreGenero'=>'required',
        ]);

        $genero->update($data);
        return Redirect()->route('genero.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genero $genero)
    {
        $genero->delete();
        return redirect()->route('genero.index');
    }
}
