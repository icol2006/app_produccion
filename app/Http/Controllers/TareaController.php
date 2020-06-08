<?php

namespace App\Http\Controllers;

use App\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Tarea::all();

        return view('tarea.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tarea.create');
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
       
        $datos = new Tarea();
        $datos->nombre = $request->nombre;
        $datos->email = $request->email;
        $datos->save();

        return redirect('/tarea')->with('success', 'Datos guardados!');
  
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tarea $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $datos = Tarea::find($id);
        return view('tarea.edit', compact('datos')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tarea $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validated();

        $datos = Tarea::find($id);
        $datos->nombre = $request->nombre;
        $datos->email = $request->email;
        $datos->save();

        return redirect('/tarea')->with('success', 'Datos guardados!');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tarea $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos = Tarea::find($id);
        $datos->delete();

        return redirect('/tarea')->with('success', 'Datos guardados!');
    }
}
