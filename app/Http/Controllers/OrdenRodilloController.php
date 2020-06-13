<?php

namespace App\Http\Controllers;

use App\OrdenRodillo;
use Illuminate\Http\Request;

class OrdenRodilloController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = OrdenRodillo::all();

        return view('orden_rodillo.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orden_rodillo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$validated = $request->validated();
       
        $datos = new OrdenRodillo();
        $datos->id_cliente = $request->id_cliente;
        $datos->id_tipo_servicio = $request->id_tipo_servicio;
        $datos->id_producto = $request->id_producto;
        $datos->descripcion = $request->descripcion;
        $datos->piezas_fabricar = $request->piezas_fabricar;
        $datos->fecha_comprom = $request->fecha_comprom;
        $datos->fecha_termino_produccion = $request->fecha_termino_produccion;
        $datos->tiempo_respuesta = $request->tiempo_respuesta;
        $datos->estatus = $request->estatus;
        $datos->save();

        return redirect('/ordenes_rodillos')->with('success', 'Datos guardados!');
  
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrdenRodillo  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $datos = OrdenRodillo::find($id);
        return view('orden_rodillo.edit', compact('datos')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrdenRodillo  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$validated = $request->validated();

        $datos = OrdenRodillo::find($id);
        $datos->id_cliente = $request->id_cliente;
        $datos->id_tipo_servicio = $request->id_tipo_servicio;
        $datos->id_producto = $request->id_producto;
        $datos->descripcion = $request->descripcion;
        $datos->piezas_fabricar = $request->piezas_fabricar;
        $datos->fecha_comprom = $request->fecha_comprom;
        $datos->fecha_termino_produccion = $request->fecha_termino_produccion;
        $datos->tiempo_respuesta = $request->tiempo_respuesta;
        $datos->estatus = $request->estatus;
        $datos->save();

        return redirect('/ordenes_rodillos')->with('success', 'Datos guardados!');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrdenRodillo  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos = OrdenRodillo::find($id);
        $datos->delete();

        return redirect('/ordenes_rodillos')->with('success', 'Datos guardados!');
    }
}
