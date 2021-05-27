<?php

namespace App\Http\Controllers;

use App\Models\dr;
use App\Models\proyectos as ModelsProyectos;
use Illuminate\Http\Request;

class proyectos extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos['proyectos']=ModelsProyectos::all();
        return view('proyectos', $proyectos);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = request()->except('_token');
        ModelsProyectos::insert($datos);
        return redirect('/proyectos');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dr  $dr
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dr  $dr
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dr  $dr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dr  $dr
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
