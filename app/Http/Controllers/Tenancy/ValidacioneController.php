<?php

namespace App\Http\Controllers\Tenancy;

use App\Http\Controllers\Controller;
use App\Models\Validacione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ValidacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $validacione = Validacione::all();
        return view('Tenancy.validaciones.index',compact('validacione'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('Tenancy.validaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'id'=> 'required',
            'fechaValidacion'=> 'required',
            'validacionSalud'=> 'required',
            'evidenciaSalud'=> 'required|image',
            'validacionElecciones'=> 'required',
            'evidenciaElecciones'=> 'required|image',
            'validacionJuntas'=> 'required',
            'evidenciaJuntas'=> 'required|image',
        ]); 
        $data['evidenciaSalud']=Storage::put('validaciones',$request->file('evidenciaSalud'));       
        $data['evidenciaElecciones']=Storage::put('validaciones',$request->file('evidenciaElecciones'));
        $data['evidenciaJuntas']=Storage::put('validaciones',$request->file('evidenciaJuntas' ));
        
        Validacione::create($data);
        return redirect()->route('validaciones.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Validacione $validacione)
    {
        
        return view('Tenancy.validaciones.show',compact('validacione'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Validacione $validacione)
    {
        return view('Tenancy.validaciones.edit', compact('validacione'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Validacione $validacione)
    {
        $data = $request->validate([
            'id'=> 'required',
            'fechaValidacion'=> 'required',
            'validacionSalud'=> 'required',
            'evidenciaSalud'=> 'nullable|image',
            'validacionElecciones'=> 'required',
            'evidenciaElecciones'=> 'nullable|image',
            'validacionJuntas'=> 'required',
            'evidenciaJuntas'=> 'nullable|image',
        ]); 
        //verificando si se subio una imagen
        if($request->hasFile( 'evidenciaSalud')){
            Storage::delete($validacione->evidenciaSalud);
            //guardando la nueva imagen
            $data['evidenciaSalud'] = Storage::put('validaciones',$request->file('evidenciaSalud'));
        
        }
        if($request->hasFile( 'evidenciaElecciones')){
            Storage::delete($validacione->evidenciaSalud);
            //guardando la nueva imagen
            $data['evidenciaElecciones'] = Storage::put('validaciones',$request->file('evidenciaElecciones'));
        
        }
        if($request->hasFile( 'evidenciaJuntas')){
            Storage::delete($validacione->evidenciaSalud);
            //guardando la nueva imagen
            $data['evidenciaJuntas'] = Storage::put('validaciones',$request->file('evidenciaJuntas'));
        
        }
        $validacione->update($data);
        return redirect()->route('validaciones.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Validacione $validacione)
    {
        Storage::delete($validacione->evidenciaSalud);
        $validacione->delete();
        return redirect()->route('validaciones.index');
    }
}
