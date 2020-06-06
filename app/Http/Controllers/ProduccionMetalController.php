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
        return ProduccionMetal::all()->first()->estatus;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProduccionMetal  $produccionMetal
     * @return \Illuminate\Http\Response
     */
    public function show(ProduccionMetal $produccionMetal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProduccionMetal  $produccionMetal
     * @return \Illuminate\Http\Response
     */
    public function edit(ProduccionMetal $produccionMetal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProduccionMetal  $produccionMetal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProduccionMetal $produccionMetal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProduccionMetal  $produccionMetal
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProduccionMetal $produccionMetal)
    {
        //
    }
}
