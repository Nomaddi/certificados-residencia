<?php

declare(strict_types=1);

namespace App\Http\Controllers\tenancy;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use Stancl\Tenancy\Middleware\InitializeTenancyBySubdomain;
use App\Http\Controllers\tenancy\tDocumentoController;
use App\Http\Controllers\tenancy\BarrioController;


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
        route::post('barrio','store')->name('nEstudio.store');
        route::get('barrio/{barrio}/edit','edit')->name('barrio.edit');
        route::pust('barrio/{barrio}/update', 'update')->name('barrio.update');
        route::delete('barrio/{barrio}/delete','delete')->name('barrio.delete');
    });

    Route::controller(nEstudioController::class)->group(function(){
        route::get('nEstudio','index')->name('nEstudio.index');
        route::get('nEstudio/create','create')->name('nEstudio.create');
        route::post('nEstudio','store')->name('nEstudio.store');
        route::get('nEstudio/{nEstudio}/edit','edit')->name('nEstudio.edit');
        route::pust('nEstudio/{nEstudio}/update', 'update')->name('nEstudio.update');
        route::delete('nEstudio/{nEstudio}/delete','delete')->name('nEstudio.delete');
    });

    
    
        
 





    });

    require __DIR__.'/auth.php';
});


