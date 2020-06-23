<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Material;
use App\OrdenMetal;
use App\TipoProducto;
use App\TipoServicio;
use Illuminate\Http\Request;

class OrdenMetalController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = OrdenMetal::all();    

        //dd($datos->first()->cliente->nombre);

        return view('orden_metal.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes=Cliente::all();
        $tipoServicio=TipoServicio::all();
        $material=Material::all();
        $tipoProducto=TipoProducto::all();

        $datos = [
            'clientes'  => $clientes ,
            'tiposServicios'   => $tipoServicio,
            'materiales'   => $material,
            'tiposProductos'   => $tipoProducto,
        ];

        return view('orden_metal.create', compact('datos'));
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
      
        $datos = new OrdenMetal();
        $datos->id_cliente = $request->id_cliente;
        $datos->id_tipo_servicio = $request->id_tipo_servicio;
        $datos->id_material = $request->id_material;
        $datos->id_tipo_producto = $request->id_tipo_producto;
        $datos->descripcion = $request->descripcion;
        $datos->piezas_fabricar = $request->piezas_fabricar;
        $datos->horas_teoricas = $request->horas_teoricas;
        $datos->piezas_reales = $request->piezas_reales;
        $datos->fecha_pedido = date("Y-m-d",strtotime($request->fecha_pedido)); 
        $datos->dias_transcurridos = $request->dias_transcurridos;
        $datos->medidas_1mm = $request->medidas_1mm;
        $datos->medidas_2mm = $request->medidas_2mm;
        $datos->medidas_largo = $request->medidas_largo;
        $datos->medidas_ancho = $request->medidas_ancho;
        $datos->medidas_espeso = $request->medidas_espeso;
        $datos->estatus = $request->estatus;
        $datos->save();

        return redirect(route('ordenes_metales.edit',$datos->id))->with('success', 'Datos guardados!');
  
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrdenMetal  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $clientes=Cliente::all();
        $tipoServicio=TipoServicio::all();
        $material=Material::all();
        $tipoProducto=TipoProducto::all();
        $orden = OrdenMetal::find($id);

        $datos = [
            'clientes'  => $clientes ,
            'tiposServicios'   => $tipoServicio,
            'materiales'   => $material,
            'tiposProductos'   => $tipoProducto,
            'orden'   => $orden,
        ];

        return view('orden_metal.edit', compact('datos')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrdenMetal  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // $validated = $request->validated();

        $datos = OrdenMetal::find($id);
        $datos->id_cliente = $request->id_cliente;
        $datos->id_tipo_servicio = $request->id_tipo_servicio;
        $datos->id_material = $request->id_material;
        $datos->id_tipo_producto = $request->id_tipo_producto;
        $datos->descripcion = $request->descripcion;
        $datos->piezas_fabricar = $request->piezas_fabricar;
        $datos->horas_teoricas = $request->horas_teoricas;
        $datos->piezas_reales = $request->piezas_reales;
        $datos->fecha_pedido = date("Y-m-d",strtotime($request->fecha_pedido)); 
        $datos->dias_transcurridos = $request->dias_transcurridos;
        $datos->medidas_1mm = $request->medidas_1mm;
        $datos->medidas_2mm = $request->medidas_2mm;
        $datos->medidas_largo = $request->medidas_largo;
        $datos->medidas_ancho = $request->medidas_ancho;
        $datos->medidas_espeso = $request->medidas_espeso;
        $datos->estatus = $request->estatus;
        $datos->save();

        return redirect(route('ordenes_metales.edit',$datos->id))->with('success', 'Datos guardados!');
       // return redirect('/ordenes_metales')->with('success', 'Datos guardados!');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrdenMetal  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos = OrdenMetal::find($id);
        $datos->delete();

        return redirect('/ordenes_metales')->with('success', 'Datos guardados!');
    }
}
