<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\TransportistaController;
use App\Http\Controllers\PaqueteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [InicioController::class, "home"])->name("paqueteria.home");

Route::get('transportistas', [TransportistaController::class, "index"])->name("transportistas.index");

Route::get('transportistas/{transportista}', [TransportistaController::class,"show"])->name("transportistas.show");

Route::get('paquetes/create', [PaqueteController::class, "create"])->name("paquetes.create");

Route::post('paquetes/store', [PaqueteController::class, "store"])->name("paquetes.store");



