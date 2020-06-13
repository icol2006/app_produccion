<?php

namespace App\Http\Controllers;

use App\ProcesoOrden;
use App\ProcesoOrdenMetal;
use Illuminate\Http\Request;

class ProcesoOrdenController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = ProcesoOrden::all();

        return view('proceso_orden.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proceso_orden.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $validated = $request->validated();
       
        $datos = new ProcesoOrden();
        $datos->nombre = $request->nombre;
        $datos->descripcion = $request->descripcion;
        $datos->estatus = $request->estatus;
        $datos->operador = $request->operador;
        $datos->piezas_terminadas = $request->piezas_terminadas;
        $datos->id_orden_metal = $request->id_orden_metal;
        $datos->id_orden_rodillo = $request->id_orden_rodillo;
        $datos->save();

        return redirect('/ordenes_metales')->with('success', 'Datos guardados!');
  
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProcesoOrden  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $datos = ProcesoOrden::find($id);
        return view('proceso_orden.edit', compact('datos')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProcesoOrden  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // $validated = $request->validated();

        $datos = ProcesoOrden::find($id);
        $datos->nombre = $request->nombre;
        $datos->descripcion = $request->descripcion;
        $datos->estatus = $request->estatus;
        $datos->operador = $request->operador;
        $datos->piezas_terminadas = $request->piezas_terminadas;
        $datos->id_orden_metal = $request->id_orden_metal;
        $datos->id_orden_rodillo = $request->id_orden_rodillo;
        $datos->save();

        return redirect('/ordenes_metales')->with('success', 'Datos guardados!');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProcesoOrden  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos = ProcesoOrden::find($id);
        $datos->delete();

        return redirect('/ordenes_metales')->with('success', 'Datos guardados!');
    }
}
