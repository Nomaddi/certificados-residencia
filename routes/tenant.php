<?php

declare(strict_types=1);

namespace App\Http\Controllers\tenancy;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use Stancl\Tenancy\Middleware\InitializeTenancyBySubdomain;
use App\Http\Controllers\tenancy\tDocumentoController;


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


        
 





    });

    require __DIR__.'/auth.php';
});


