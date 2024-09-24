<?php

declare(strict_types=1);

namespace App\Http\Controllers\tenancy;
use App\Models\Genero;
use App\Models\tSolicitante;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Tenancy\PerfilController;
use App\Http\Controllers\tenancy\BarrioController;
use App\Http\Controllers\tenancy\tDocumentoController;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Illuminate\Support\Facades\Storage as FacadesStorage;
use Stancl\Tenancy\Middleware\InitializeTenancyBySubdomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

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


        // Simplificar todas las rutas que usan el mismo patrón RESTful con resource

        // Documento
        Route::resource('documento', tDocumentoController::class)->except(['show']);

        // Barrio
        Route::resource('barrio', BarrioController::class)->except(['show']);

        // Nivel de Estudio (nEstudio)
        Route::resource('nEstudio', nEstudioController::class)->except(['show']);

        // Solicitante
        Route::resource('tSolicitante', tSolicitanteController::class)->except(['show']);

        // Género
        Route::resource('genero', GeneroController::class)->except(['show']);

        // Permisos
        Route::resource('permiso', PermisoController::class)->except(['show']);

        // Roles
        Route::resource('rol', RolController::class)->except(['show']);

        // Direcciones
        Route::resource('direccion', DireccionController::class)->except(['show']);

        // Validaciones
        Route::resource('validaciones', ValidacioneController::class)->except(['show']);

        // Solicitudes
        Route::resource('solicitud', SolicitudController::class)->except(['show']);

        // Solicitantes
        Route::resource('solicitante', SolicitanteController::class)->except(['show']);

        // Ruta para imágenes desde los inquilinos
        Route::get('/file/{path}', function ($path) {
            return response()->file(Storage::path($path));
        })->where('path', '.*')->name('file');


        Route::get('profile', [PerfilController::class, 'edit'])->name('tenant.profile.edit');
        Route::patch('profile', [PerfilController::class, 'update'])->name('profile.update');
        Route::delete('profile', [PerfilController::class, 'destroy'])->name('profile.destroy');

    });

    require __DIR__ . '/auth.php';
});


