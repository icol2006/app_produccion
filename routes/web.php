<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('produccion_rodillos','ProduccionRodilloController');
Route::resource('produccion_metal','ProduccionMetalController');
Route::resource('clientes','ClienteController');
Route::resource('tipo_servicios','TipoServicioController');
Route::resource('materiales','MaterialController');
Route::resource('tipo_material','TipoMaterialController');

Route::get('/', function () {
    return view('welcome');
});
