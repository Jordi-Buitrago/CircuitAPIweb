<?php

use App\Http\Controllers\ComandaController;
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
