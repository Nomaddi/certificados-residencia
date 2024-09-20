<?php

declare(strict_types=1);

namespace App\Http\Controllers\tenancy;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use Stancl\Tenancy\Middleware\InitializeTenancyBySubdomain;
use App\Http\Controllers\tenancy\tDocumentoController;
use App\Http\Controllers\tenancy\BarrioController;
use Illuminate\Support\Facades\Storage;
use App\Models\Genero;
use App\Models\tSolicitante;
use Illuminate\Support\Facades\Storage as FacadesStorage;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', function () {
        return view('Tenancy.welcome');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('Tenancy.dashboard');
        })->name('dashboard');

        // Route::get('/profile', function () {
        //     return view('Tenancy.profile');
        // })->name('profile');

        // Route::get('/settings', function () {
        //     return view('Tenancy.settings');
        // })->name('settings');


        Route::get('/documento',[tDocumentoController::class, 'index'])->name('documento.index');
        Route::get('/documento/create',[tDocumentoController::class, 'create'])->name('documento.create');
        Route::post('/documento',[tDocumentoController::class, 'store'])->name('documento.store');
        Route::get('/documento/{tDocumento}/edit',[tDocumentoController::class, 'edit'])->name('documento.edit');
        Route::put('/documento/{tDocumento}/update',[tDocumentoController::class, 'update'])->name('documento.update');
        Route::delete('/documento/{tDocumento}',[tDocumentoController::class, 'destroy'])->name('documento.destroy');

        Route::controller(BarrioController::class)->group(function(){
            route::get('barrio','index')->name('barrio.index');
            route::get('barrio/create','create')->name('barrio.create');
            route::post('barrio','store')->name('barrio.store');
            route::get('barrio/{barrio}/edit','edit')->name('barrio.edit');
            route::put('barrio/{barrio}/update', 'update')->name('barrio.update');
            route::delete('barrio/{barrio}/delete','delete')->name('barrio.delete');
        });

        Route::controller(nEstudioController::class)->group(function(){
            route::get('nEstudio','index')->name('nEstudio.index');
            route::get('nEstudio/create','create')->name('nEstudio.create');
            route::post('nEstudio','store')->name('nEstudio.store');
            route::get('nEstudio/{nEstudio}/edit','edit')->name('nEstudio.edit');
            route::put('nEstudio/{nEstudio}/update', 'update')->name('nEstudio.update');
            route::delete('nEstudio/{nEstudio}/delete','delete')->name('nEstudio.delete');
        });

        Route::controller(tSolicitanteController::class)->group(function(){
            route::get('tSolicitante','index')->name('tSolicitante.index');
            route::get('tSolicitante','create')->name('tSolicitante.create');
            route::post('tSolicitante','store')->name('tSolicitante.store');
            route::get('tSolicitante/{tSolicitante}/edit','edit')->name('tSolicitante.edit');
            route::put('tSolicitante/{tSolicitante}/update', 'update')->name('tSolicitante.update');
            route::delete('tSolicitante/{tSolicitante}/delete','delete')->name('tSolicitante.delete');
        });
        
            
        Route::controller(GeneroController::class)->group(function(){
            route::get('genero','index')->name('genero.index');
            route::get('genero/create','create')->name('genero.create');
            route::post('genero','store')->name('genero.store');
            route::get('genero/{genero}/edit','edit')->name('genero.edit');
            route::put('genero/{genero}/update', 'update')->name('genero.update');
            route::delete('genero/{genero}/delete','delete')->name('genero.delete');
        });

        Route::controller(PermisoController::class)->group(function(){
            Route::get('permiso', 'index')->name('permiso.index');
            Route::get('permiso/create', 'create')->name('permiso.create');
            Route::post('permiso', 'store')->name('permiso.store');
            Route::get('permiso/{permiso}/edit', 'edit')->name('permiso.edit');
            Route::put('permiso/{permiso}/update', 'update')->name('permiso.update');
            Route::delete('permiso/{permiso}/delete', 'delete')->name('permiso.delete');
        });
        
        Route::controller(RolController::class)->group(function(){
            Route::get('rol', 'index')->name('rol.index');
            Route::get('rol/create', 'create')->name('rol.create');
            Route::post('rol', 'store')->name('rol.store');
            Route::get('rol/{rol}/edit', 'edit')->name('rol.edit');
            Route::put('rol/{rol}/update', 'update')->name('rol.update');
            Route::delete('rol/{rol}/delete', 'delete')->name('rol.delete');
        });
        
        Route::controller(DireccionController::class)->group(function(){
            Route::get('direccion', 'index')->name('direccion.index');
            Route::get('direccion/create', 'create')->name('direccion.create');
            Route::post('direccion', 'store')->name('direccion.store');
            Route::get('direccion/{direccion}/edit', 'edit')->name('direccion.edit');
            Route::put('direccion/{direccion}/update', 'update')->name('direccion.update');
            Route::delete('direccion/{direccion}/delete', 'delete')->name('direccion.delete');
        });
        
        Route::controller(ValidacioneController::class)->group(function(){
            Route::get('validaciones', 'index')->name('validaciones.index');
            Route::get('validaciones/create', 'create')->name('validaciones.create');
            Route::post('validaciones', 'store')->name('validaciones.store');
            Route::get('validaciones/{validacione}/edit', 'edit')->name('validaciones.edit');
            Route::put('validaciones/{validacione}/update', 'update')->name('validaciones.update');
            Route::delete('validaciones/{validacione}/delete', 'delete')->name('validaciones.delete');
        });
        
        //ruta para las imagenes desde los inquilinos 
        Route::get('/file/{path}',function($path){
            return response()->file(Storage::path($path));
        })->where('path','.*')->name('file');


        Route::controller(SolicitudController::class)->group(function(){
            Route::get('solicitud', 'index')->name('solicitud.index');
            Route::get('solicitud/create', 'create')->name('solicitud.create');
            Route::post('solicitud', 'store')->name('solicitud.store');
            Route::get('solicitud/{solicitud}/edit', 'edit')->name('solicitud.edit');
            Route::put('solicitud/{solicitud}/update', 'update')->name('solicitud.update');
            Route::delete('solicitud/{solicitud}/delete', 'delete')->name('solicitud.delete');
        });
        

        Route::controller(SolicitanteController::class)->group(function(){
            Route::get('solicitante', 'index')->name('solicitante.index');
            Route::get('solicitante/create', 'create')->name('solicitante.create');
            Route::post('solicitante', 'store')->name('solicitante.store');
            Route::get('solicitante/{solicitante}/edit', 'edit')->name('solicitante.edit');
            Route::put('solicitante/{solicitante}/update', 'update')->name('solicitante.update');
            Route::delete('solicitante/{solicitante}/delete', 'delete')->name('solicitante.delete');
        });
        

    });

    require __DIR__.'/auth.php';
});


