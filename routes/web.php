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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('comandes', ComandaController::class);


Route::group(['middleware' => ['auth']], function () {
    Route::get('/comandes', [ComandaController::class, 'index'])->name('comandes.index');
    Route::post('/comandes/filter', [ComandaController::class, 'filter'])->name('comandes.filter');
    Route::get('/comandes/{comande}', [ComandaController::class, 'show'])->name('comandes.show');
    Route::get('/comandes/create', [ComandaController::class, 'create'])->name('comandes.create');
    Route::post('/comandes', [ComandaController::class, 'store'])->name('comandes.store');
    Route::delete('/comandes/{comande}', [ComandaController::class, 'destroy'])->name('comandes.destroy');
});
