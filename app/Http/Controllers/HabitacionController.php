<?php

namespace App\Http\Controllers;

use App\Habitacion;
use App\TipoHabitacion;
use App\Servicio;
use App\Disponibilidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;
use Exception;

class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habitaciones = Habitacion::all();


        return view('habitacion.index', [

            'habitaciones' => $habitaciones


            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicios = Servicio::all();
        $disponibilidades = Disponibilidad::all();
        $tipo_habitaciones = TipoHabitacion::all();

        return view('habitacion.crear', [

            'servicios' => $servicios,
            'disponibilidades' => $disponibilidades,
            'tipo_habitaciones' => $tipo_habitaciones

            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'id_tipo_habitacion' => 'required|numeric',
            'id_disponibilidad' => 'required|numeric'

        ], [
           // 'nombre.required' => 'El campo nombre es obligatorio',

        ]);

        DB::beginTransaction();
        //imprimir en el navegador una respuesta en formato json debugear
         //return response()->json($request->all());

        try{

            //buscar el tipo de habitacion seleccionado en la vista
            $costohabitacion = TipoHabitacion::find($request['id_tipo_habitacion']);
            $request ['disponibilidad']=$costohabitacion->costo;

            Habitacion::create($request->all());

            DB::commit();
            return redirect()->route('habitacion.index')->with('exito', 'La habitacion ha sido registrada.');
        }catch(Exception $e){

            //que salga en pantalla el error que se guarda en la variable e
             dd($e);

            DB::rollBack();
        }catch(Throwable $t){

            //que salga en pantalla el error que se guarda en la variable e
              dd($t);

            DB::rollBack();
        }

        return redirect()->route('habitacion.index')->with('error', 'No se pudo registrar la habitacion.');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function show(Habitacion $habitacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Habitacion $habitacion)
    {
        //return response()->json($agencia);
        return view('habitacion.edit', compact('habitacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Habitacion $habitacion)
    {
        $this->validate($request, [

            'id_tipo_habitacion' => 'required|numeric',
            'id_disponibilidad' => 'required|numeric'

        ], [
           // 'nombre.required' => 'El campo nombre es obligatorio',

        ]);

        DB::beginTransaction();
        //imprimir en el navegador una respuesta en formato json debugear
         //return response()->json($request->all());

         $tipo_habitaciones = TipoHabitacion::all();

        try{

            //buscar el tipo de habitacion seleccionado en la vista
            $costohabitacion = TipoHabitacion::find($request['id_tipo_habitacion']);
            $request ['disponibilidad']=$costohabitacion->costo;

            $habitacion->update($request->all());


            DB::commit();
            return redirect()->route('habitacion.index')->with('exito', 'La habitacion ha sido registrada.');
        }catch(Exception $e){

            //que salga en pantalla el error que se guarda en la variable e
             dd($e);

            DB::rollBack();
        }catch(Throwable $t){

            //que salga en pantalla el error que se guarda en la variable e
              dd($t);

            DB::rollBack();
        }

        return redirect()->route('habitacion.index')->with('error', 'No se pudo registrar la habitacion.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Habitacion $habitacion)
    {
        //
    }
}
