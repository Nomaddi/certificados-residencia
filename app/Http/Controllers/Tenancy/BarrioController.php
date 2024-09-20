<?php

namespace App\Http\Controllers\Tenancy;

use App\Http\Controllers\Controller;
use App\Models\Barrio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class BarrioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barrio = Barrio::all();
        return view('Tenancy.barrio.index', compact('barrio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Tenancy.barrio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'id' => 'required',
            'nBarrio'=> 'required',
            'upz'=> 'required',
            'tipo'=> 'required',
            'sector'=> 'required',

        ]);

        Barrio::create($data);
        return Redirect()->route('barrio.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barrio $barrio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barrio $barrio)
    {
        return view('Tenancy.barrio.edit', compact('barrio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barrio $barrio)
    {
        $data = $request->validate([
            'id' => 'required',
            'nBarrio'=> 'required',
            'upz'=> 'required',
            'tipo'=> 'required',
            'sector'=> 'required',

        ]);
        $barrio->update($data);
        return redirect()->route('barrio.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barrio $barrio)
    {
        $barrio->delete();
        return redirect()->route('barrio.index');
    }
}
