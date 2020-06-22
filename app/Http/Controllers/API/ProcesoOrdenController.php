<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\ProcesoOrden;

class ProcesoOrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProcesoOrden::all();
    }

    public function getByIdOrdenRodillo($id)
    {
        return ProcesoOrden::where('id_orden_rodillo', $id)->get();
        
    }

    public function getByIdOrdenMetal($id)
    {
        return ProcesoOrden::where('id_orden_metal',$id)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = new ProcesoOrden();
        $datos->nombre = $request->nombre;
        $datos->descripcion = $request->descripcion;
        $datos->estatus = $request->estatus;
        $datos->operador = $request->operador;
        $datos->piezas_terminadas = $request->piezas_terminadas;
        $datos->id_orden_metal = $request->id_orden_metal;
        $datos->id_orden_rodillo = $request->id_orden_rodillo;
        $datos->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ProcesoOrden::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {        
        $datos = ProcesoOrden::find($request->id);
        $datos->nombre = $request->nombre;
        $datos->descripcion = $request->descripcion;
        $datos->estatus = $request->estatus;
        $datos->operador = $request->operador;
        $datos->piezas_terminadas = $request->piezas_terminadas;
        $datos->id_orden_metal = $request->id_orden_metal;
        $datos->id_orden_rodillo = $request->id_orden_rodillo;
        $datos->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $datos = ProcesoOrden::find($request->id);
        $datos->delete();
    }
}
