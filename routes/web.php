<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TenantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');

    
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/tiposDocumentos', function () {
    return view('tiposDocumentos');

})->middleware(['auth', 'verified'])->name('tiposDocumentos');

Route::get('tiposDocumentos_show', function(){
    return view('tiposDocumentos_show');
})->middleware(['auth', 'verified'])->name('tiposDocumentos_show') ;

Route::get('tiposDocumentos_edit', function(){
    return view('tiposDocumentos_edit');
})->middleware(['auth', 'verified'])->name('tiposDocumentos_edit') ;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/tenants', TenantController::class)->except(['show']);


});

require __DIR__.'/auth.php';
