<?php

namespace App\Http\Controllers;

use App\TipoServicio;
use Illuminate\Http\Request;

class TipoServicioController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = TipoServicio::all();

        return view('tipo_servicio.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_servicio.create');
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
       
        $datos = new TipoServicio();
        $datos->nombre = $request->nombre;
        $datos->descripcion = $request->descripcion;
        $datos->save();

        return redirect('/tipos_servicios')->with('success', 'Datos guardados!');
  
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoServicio  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $datos = TipoServicio::find($id);
        return view('tipo_servicio.edit', compact('datos')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoServicio  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$validated = $request->validated();

        $datos = TipoServicio::find($id);
        $datos->nombre = $request->nombre;
        $datos->descripcion = $request->descripcion;
        $datos->save();

        return redirect('/tipos_servicios')->with('success', 'Datos guardados!');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoServicio  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos = TipoServicio::find($id);
        $datos->delete();

        return redirect('/tipos_servicios')->with('success', 'Datos guardados!');
    }}
