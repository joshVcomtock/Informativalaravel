<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CentrosController;
use App\Http\Controllers\DetallecentrosController;
use App\Http\Controllers\InformacionesController;
use App\Http\Controllers\PrincipalesController;
use App\Http\Controllers\ProgramasController;
use App\Http\Controllers\RedcentrosController;
use App\Http\Controllers\CapsulasController;

Route::get('/centros', [CentrosController::class, 'index']);
Route::post('/centros', [CentrosController::class, 'store']);
Route::delete('/centros/{id}', [CentrosController::class, 'destroy']);
Route::put('centros/{id}', [CentrosController::class, 'update']);

Route::get('/detallecentros', [DetallecentrosController::class, 'index']);
Route::post('/detallecentros', [DetallecentrosController::class, 'store']);
Route::delete('/detallecentros/{id}', [DetallecentrosController::class, 'destroy']);
Route::put('/detallecentros/{id}', [DetallecentrosController::class, 'update']);

Route::get('/informacion', [InformacionesController::class, 'index']);
Route::post('/informacion', [InformacionesController::class, 'store']);
Route::delete('/informacion/{id}', [InformacionesController::class, 'destroy']);
Route::put('/informacion/{id}', [InformacionesController::class, 'update']);

Route::get('/principales', [PrincipalesController::class, 'index']);
Route::post('/principales', [PrincipalesController::class, 'store']);
Route::delete('principales/{id}', [PrincipalesController::class, 'destroy']);
Route::put('/principales/{id}', [PrincipalesController::class, 'update']);

Route::get('/programa', [ProgramasController::class, 'index']);
Route::post('/programa', [ProgramasController::class, 'store']);
Route::delete('/programa/{id}', [ProgramasController::class, 'destroy']);
Route::put('/programa/{id}', [ProgramasController::class, 'update']);

Route::get('/red', [RedcentrosController::class, 'index']);
Route::post('/red', [RedcentrosController::class, 'store']);
Route::delete('/red/{id}', [RedcentrosController::class, 'destroy']);
Route::put('/red/{id}', [RedcentrosController::class, 'update']);

Route::get('/capsula', [CapsulasController::class, 'index']);
Route::post('/capsula', [CapsulasController::class, 'store']);
Route::delete('/capsula/{id}', [CapsulasController::class, 'destroy']);
Route::put('/capsula/{id}', [CapsulasController::class, 'update']);
