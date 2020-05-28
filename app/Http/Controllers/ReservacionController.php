<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Reservacion;
use App\Habitacion;
use App\ReservacionServicio;
use App\ServicioIncluyeHabitacion;
use App\TipoHabitacion;
use App\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;
use Exception;
class ReservacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $reservaciones = Reservacion::all();
       $habitaciones  = Habitacion::all();

       $reservaciones = Reservacion::where('estado', '=', 1)->get();

        #referencia a la ruta que se va ir
        return view('reservacion.index', [

            'reservaciones' => $reservaciones,
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

        $servicios =Servicio::all();
        $habitaciones =Habitacion::where('id_disponibilidad', '=', 1)->get();
        $clientes = Cliente::where('estado', '=', 1)->get(); // obtener todos lo clientes activos
        $reservaciones = Reservacion::all();


        #referencia a la ruta que se va ir
        return view('reservacion.crear', [

            'servicios' => $servicios,
            'clientes' => $clientes,
            'habitaciones' => $habitaciones,
            'reservaciones' => $reservaciones

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
            'fecha_reserva' => 'required|string|max:50',
            'fecha_ingreso' => 'required|string|max:50',
            'fecha_salida' => 'required|string|max:50',
            'costo' => 'required|string|max:50',
            'id_usuario' => 'required',
            'id_cliente' => 'required',
            'id_habitacion' => 'required',
            'id_servicio' => 'required'


        ], [
           // 'nombre.required' => 'El campo nombre es obligatorio',

        ]);

            //dd($request['costo']);

        DB::beginTransaction();
        $exito = false;

            //imprimir en el navegador una respuesta en formato json debugear
            //return response()->json($request->all());

        try{

           $reservacion = Reservacion::create($request->all());

           $reservacion_servicio = new ReservacionServicio();
           $reservacion_servicio ->descripcion = 'servicios ';
           $reservacion_servicio ->costo = $request['costo'];
           $reservacion_servicio ->id_servicio= $request['id_servicio'];
           $reservacion_servicio ->id_reservacion= $reservacion['id'];
           $reservacion_servicio ->save();

            $habitacion = Habitacion::find($request['id_habitacion']);
            $habitacion -> id_disponibilidad = 3;
            $habitacion -> update();

            DB::commit();
            $exito = true;

        }catch(Exception $e){

           //que salga en pantalla el error que se guarda en la variable e
            dd($e);

            DB::rollBack();
        }catch(Throwable $t){

            dd($e);
            DB::rollBack();

        }

        if ($exito){
            return redirect()->route('reservacion.index')->with('error', 'RESERVACION REGISTRADA.');
        }else{
            return redirect()->route('reservacion.index')->with('error', 'NO SE PUDO REGISTRAR LA RESERVACION.');
        }
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reporte()
    {
        #referencia a la ruta que se va ir

        #todos los registros de los cliente
        #guarda en la variable clientes a todos los clientes
        $reservaciones = Reservacion::all();

        return view('reservacion.reporte', [
            #creando una variable activePage con el valor cliente-index
            #para saber en que opcionmenu estoy
            'activePage' => 'cliente-index',
            #creacion de la variable cliente
            #mando a la vista la variable clientes
            'reservaciones' => $reservaciones

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function show(Reservacion $reservacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservacion $reservacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservacion $reservacion)
    {

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservacion $reservacion)
    {
        $reservacion->estado = 0;
        $reservacion->update();
        return redirect()->route('reservacion.index')->with('exito', 'Reservacion Cancelada correctamente.');
    }
}
