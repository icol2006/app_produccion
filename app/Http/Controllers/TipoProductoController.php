<?php

namespace App\Http\Controllers;

use App\TipoProducto;
use Illuminate\Http\Request;

class TipoProductoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = TipoProducto::all();

        return view('tipo_producto.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_producto.create');
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
       
        $datos = new TipoProducto();
        $datos->nombre = $request->nombre;
        $datos->descripcion = $request->descripcion;
        $datos->save();

        return redirect('/tipos_productos')->with('success', 'Datos guardados!');
  
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoProducto $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $datos = TipoProducto::find($id);
        return view('tipo_producto.edit', compact('datos')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoProducto $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$validated = $request->validated();

        $datos = TipoProducto::find($id);
        $datos->nombre = $request->nombre;
        $datos->descripcion = $request->descripcion;
        $datos->save();

        return redirect('/tipos_productos')->with('success', 'Datos guardados!');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoProducto $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos = TipoProducto::find($id);
        $datos->delete();

        return redirect('/tipos_productos')->with('success', 'Datos guardados!');
    }
}
