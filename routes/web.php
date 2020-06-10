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

Route::resource('clientes','ClienteController');
Route::resource('tipos_servicios','TipoServicioController');
Route::resource('materiales','MaterialController');
Route::resource('tipos_productos','TipoProductoController');
Route::resource('productos','ProductoController');
Route::resource('tareas','TareaController');

Route::get('/', function () {
    return view('welcome');
});
