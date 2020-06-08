<?php

namespace App\Http\Controllers;

use App\ProduccionRodillo;
use Illuminate\Http\Request;

class ProduccionRodilloController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = ProduccionRodillo::all();

        return view('produccion_rodillos.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produccion_rodillos.create');
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
       
        $datos = new ProduccionRodillo();
        $datos->nombre = $request->nombre;
        $datos->email = $request->email;
        $datos->save();

        return redirect('/produccion_rodillos')->with('success', 'Datos guardados!');
  
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProduccionRodillo  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $datos = ProduccionRodillo::find($id);
        return view('produccion_rodillos.edit', compact('datos')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProduccionRodillo  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validated();

        $datos = ProduccionRodillo::find($id);
        $datos->nombre = $request->nombre;
        $datos->email = $request->email;
        $datos->save();

        return redirect('/produccion_rodillos')->with('success', 'Datos guardados!');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProduccionRodillo  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos = ProduccionRodillo::find($id);
        $datos->delete();

        return redirect('/produccion_rodillos')->with('success', 'Datos guardados!');
    }
}
