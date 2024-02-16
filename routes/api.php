<?php

use App\Http\Controllers\UsuarioController;
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

Route::get('/', [UsuarioController::class, 'index']);

Route::get('/{usuario}', [UsuarioController::class, 'show']); // mostrar un usuario especifico
Route::post('/store', [UsuarioController::class, 'store']); //es para crear un nuevo registro
Route::put('/usuario/{usuario}', [UsuarioController::class, 'update']); //para actualizas unformacion de un registro especifico

Route::delete('usuario/{usuario}', [UsuarioController::class, 'destroy']); //para eliminar un registro especifico;