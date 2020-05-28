<?php

namespace App\Http\Controllers;

use App\ReservacionServicio;
use Illuminate\Http\Request;

class ReservacionServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         #referencia a la ruta que se va ir
         return view('reservacion.index');
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
     * @param  \App\ReservacionServicio  $reservacionServicio
     * @return \Illuminate\Http\Response
     */
    public function show(ReservacionServicio $reservacionServicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReservacionServicio  $reservacionServicio
     * @return \Illuminate\Http\Response
     */
    public function edit(ReservacionServicio $reservacionServicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReservacionServicio  $reservacionServicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReservacionServicio $reservacionServicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReservacionServicio  $reservacionServicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReservacionServicio $reservacionServicio)
    {
        //
    }
}
