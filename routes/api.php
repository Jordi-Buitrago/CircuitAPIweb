<?php

use App\Http\Controllers\ComandaControllerApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//--------------- COMANDA CONTROLLER API ---------------

//Show comanda
Route::middleware(['auth:sanctum', 'verified'])->get('/comandes/{id}', [ComandaControllerApi::class, 'show']);

//Show all comandes
Route::middleware(['auth:sanctum', 'verified'])->get('/comandes', [ComandaControllerApi::class, 'index']);

//create comanda 
Route::middleware(['auth:sanctum', 'verified'])->post('/comandes/create', [ComandaControllerApi::class, 'create']);

//update comanda
Route::middleware(['auth:sanctum', 'verified'])->put('/comandes/{id}', [ComandaControllerApi::class, 'update']);

//get comandes by mail
Route::middleware(['auth:sanctum', 'verified'])->get('/comandes/email/{email}', [ComandaControllerApi::class, 'getComandesByEmail']);




