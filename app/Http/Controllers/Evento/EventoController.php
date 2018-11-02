<?php

namespace App\Http\Controllers\Evento;

use App\Evento_tipo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Evento;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Redireccionar a una vista
        $tipos = Evento_tipo::all();
        return view('evento/nuevoEvento')->with('tipos',$tipos);
    }

    public function misEventos()
    {
        // Redireccionar a una vista
        return view('evento/misEventos');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evento = new Evento;
        $evento -> fecha_inicio=$request->txt_fecha_ini;
        $evento -> fecha_final=$request->txt_fecha_ter;
        $evento -> descripcion_corta=$request->txt_nombre;
        $evento -> descripcion_larga=$request->txt_descripcion;
        $evento -> imagen=$request->txt_imagen;
        $evento -> video=$request->txt_video;
        $evento -> save();





        return redirect('evento/misEventos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
