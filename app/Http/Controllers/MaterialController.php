<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Material::all();

        return view('material.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('material.create');
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
       
        $datos = new Material();
        $datos->nombre = $request->nombre;
        $datos->email = $request->email;
        $datos->save();

        return redirect('/materiales')->with('success', 'Datos guardados!');
  
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Material  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $datos = Material::find($id);
        return view('material.edit', compact('datos')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Material  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validated();

        $datos = Material::find($id);
        $datos->nombre = $request->nombre;
        $datos->email = $request->email;
        $datos->save();

        return redirect('/materiales')->with('success', 'Datos guardados!');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Material  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos = Material::find($id);
        $datos->delete();

        return redirect('/materiales')->with('success', 'Datos guardados!');
    }
}
