<?php

namespace App\Http\Controllers\Tenancy;

use App\Http\Controllers\Controller;
use App\Models\nEstudio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class nEstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nEstudio = nEstudio::all();
        return view('Tenancy.nEstudio.index', compact('nEstudio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Tenancy.nEstudio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validator([
            'id' => 'required',
            'nivelEstudi' => 'required',
        ]);
        nEstudio::create($data);
        return Redirect()->route('nEstudio.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(nEstudio $nEstudio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(nEstudio $nEstudio)
    {
        return view('Tenancy.nEstudio.edit', compact('nEstudio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, nEstudio $nEstudio)
    {
        $data = $request->validate([
            'id'=>'required',
            'nivelEstidio'=> 'required'
        ]);
        $nEstudio->update($data);
        return redirect()->route('nEstudio.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(nEstudio $nEstudio)
    {
        $nEstudio->delete();
        return redirect()->route('nEstudio.index');
    }
}
