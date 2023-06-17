<?php

use App\Http\Controllers\ComandaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EspaiController;
use App\Http\Controllers\ServeiController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//pagina principal
Route::get('/', function () {
    return view('index');
});


Route::get('/apps', function () {
    return view('apps');
}); 

Route::resource('comandes', ComandaController::class);

Route::get('/comandes/create', [ComandaController::class, 'create'])->name('comandes.create');
Route::post('/comandes', [ComandaController::class, 'store'])->name('comandes.store');

Route::get('/qui-som', function () {
    return view('quisom');
})->name('qui-som');



Route::group(['middleware' => ['auth']], function () {
    Route::get('/comandes', [ComandaController::class, 'index'])->name('comandes.index');
    Route::post('/comandes/filter', [ComandaController::class, 'filter'])->name('comandes.filter');
    Route::get('/comandes/{comande}', [ComandaController::class, 'show'])->name('comandes.show');
    Route::get('/comandes/{comande}/edit', [ComandaController::class, 'edit'])->name('comandes.edit');
    Route::put('/comandes/{comande}', [ComandaController::class, 'update'])->name('comandes.update');
    Route::delete('/comandes/{comande}', [ComandaController::class, 'destroy'])->name('comandes.destroy');
});

//route group espais
Route::group(['middleware' => ['auth']], function () {
    Route::get('/espais', [EspaiController::class, 'index'])->name('espais.index'); 
    Route::get('/espais/create', [EspaiController::class, 'create'])->name('espais.create');
    Route::post('/espais', [EspaiController::class, 'store'])->name('espais.store');
    Route::get('/espais/{espai}', [EspaiController::class, 'show'])->name('espais.show');
    Route::get('/espais/{espai}/edit', [EspaiController::class, 'edit'])->name('espais.edit');
    Route::put('/espais/{espai}', [EspaiController::class, 'update'])->name('espais.update');
    Route::delete('/espais/{espai}', [EspaiController::class, 'destroy'])->name('espais.destroy');
});


Route::group(['middleware' => ['auth']], function () {
    Route::get('/serveis', [ServeiController::class, 'index'])->name('serveis.index'); 
    Route::get('/serveis/create', [ServeiController::class, 'create'])->name('serveis.create');
    Route::post('/serveis', [ServeiController::class, 'store'])->name('serveis.store');
    Route::get('/serveis/{servei}', [ServeiController::class, 'show'])->name('serveis.show');
    Route::get('/serveis/{servei}/edit', [ServeiController::class, 'edit'])->name('serveis.edit');
    Route::put('/serveis/{servei}', [ServeiController::class, 'update'])->name('serveis.update');
    Route::delete('/serveis/{servei}', [ServeiController::class, 'destroy'])->name('serveis.destroy');
});
