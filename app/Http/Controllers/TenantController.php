<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use Stancl\Tenancy\Contracts\StorageDriver;
use Illuminate\Validation\Rules\Unique;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        return view('Tenant.index', [
           'inquilinos' => Tenant::all(),
        ]);
    
    

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Tenant.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request)
    {
      
        $request->validate([
            'id'=>'required',
        ]);
        $NewInquilino = Tenant::create($request ->all());
       
        $NewInquilino->domains()->create([
            'domain' => $request->get('id') . '.certificados-residencia.test',
        ]);
        return redirect()->route('inquilino.index');
       
       

    }

    /**
     * Display the specified resource.
     */
    public function show(Tenant $tenant)
    {
        return view('Tenant.show', [
            'inquilinos' => $tenant,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tenant $tenant)
    {
        return view('Tenant.edit', [
            'inquilinos' => $tenant,
        ]);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tenant $tenant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tenant $tenant)
    {
        //
    }
}
