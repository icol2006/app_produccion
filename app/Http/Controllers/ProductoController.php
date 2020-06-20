<?php

namespace App\Http\Controllers;

use App\Material;
use App\Producto;
use App\TipoProducto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Producto::all();

       //$datos= $datos->first()->tipoProducto->nombre;


        return view('producto.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $material=Material::all();
        $tipoProducto=TipoProducto::all();

        $datos = [
            'materiales'  => $material ,
            'tiposProductos'   => $tipoProducto,
        ];

        return view('producto.create', compact('datos'));
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
       
        $datos = new Producto();
        $datos->nombre = $request->nombre;
        $datos->id_material = $request->id_material;
        $datos->id_tipo_producto = $request->id_tipo_producto;
        $datos->save();

        return redirect('/productos')->with('success', 'Datos guardados!');
  
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $producto = Producto::find($id);
        $material=Material::all();
        $tipoProducto=TipoProducto::all();

        $datos = [
            'materiales'  => $material ,
            'tiposProductos'   => $tipoProducto,
            'producto'   => $producto,
        ];


        return view('producto.edit', compact('datos')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$validated = $request->validated();

        $datos = Producto::find($id);
        $datos->nombre = $request->nombre;
        $datos->id_material = $request->id_material;
        $datos->id_tipo_producto = $request->id_tipo_producto;
        $datos->save();

        return redirect('/productos')->with('success', 'Datos guardados!');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos = Producto::find($id);
        $datos->delete();

        return redirect('/productos')->with('success', 'Datos guardados!');
    }
}
