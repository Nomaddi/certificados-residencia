<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use Stancl\Tenancy\Contracts\StorageDriver;
use Stancl\Tenancy\Events\TenantDeleted;
use Illuminate\Validation\Rules\Unique;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Tenant.index', [
            'tenants' => Tenant::all(),
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
            'id'=>'required|unique:tenants',
        ]);
        $NewInquilino = Tenant::create($request ->all());

        $NewInquilino->domains()->create([
            'domain' => $request->get('id') . '.' . env('DOMINIO'),
        ]);
        return redirect()->route('tenants.index');



    }

    /**
     * Display the specified resource.
     */
    public function show(Tenant $tenant)
    {
        return view('Tenant.show', [
            'tenant' => $tenant,
        ]);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tenant $tenant)
    {

        return view('Tenant.edit',[
            'tenant' => $tenant,
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tenant $tenant)
    {
        $request->validate([
            'id' => 'required|unique:tenants,id,' . $tenant->id
        ]);

        $tenant->update([
            'id' => $request->get('id'),
        ]);

        $tenant->domains()->update([
            'domain' => $request->get('id') . '.' . env('DOMINIO')
        ]);


        return redirect()->route('tenants.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tenant $tenant)
    {

        $tenant->delete();
        return redirect()->route('tenants.index');
    }
}
