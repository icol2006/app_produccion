<?php

namespace App\Http\Controllers;

use App\ProduccionMetal;
use Illuminate\Http\Request;

class ProduccionMetalController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = ProduccionMetal::all();

        return view('produccion_metal.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produccion_metal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validated();
       
        $datos = new ProduccionMetal();
        $datos->nombre = $request->nombre;
        $datos->email = $request->email;
        $datos->save();

        return redirect('/produccion_metales')->with('success', 'Datos guardados!');
  
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProduccionMetal  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $datos = ProduccionMetal::find($id);
        return view('produccion_metal.edit', compact('datos')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProduccionMetal  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validated();

        $datos = ProduccionMetal::find($id);
        $datos->nombre = $request->nombre;
        $datos->email = $request->email;
        $datos->save();

        return redirect('/produccion_metales')->with('success', 'Datos guardados!');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProduccionMetal  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos = ProduccionMetal::find($id);
        $datos->delete();

        return redirect('/produccion_metales')->with('success', 'Datos guardados!');
    }
}
