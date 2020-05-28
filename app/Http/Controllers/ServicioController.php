<?php

namespace App\Http\Controllers;

use App\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;
use Exception;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


         $servicios=Servicio::where('estado', '=', 1)->get();

         return view('servicio.index', [
            'activePage' => 'servicio-index',
             #creacion de la variable servicio
             #mando a la vista la variable servicios
             'servicios' => $servicios

         ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         #referencia a la ruta que se va ir
         return view('servicio.crear');


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
            'nombre' => 'required|string|max:50',
            'costo_unitario' => 'required|string|max:50',
            'costo_total' => 'required|string|max:50'

        ], [

            //'nombre.required' => 'El campo nombre es obligatorio',

        ]);

        DB::beginTransaction();
        //imprimir en el navegador una respuesta en formato json debugear
         //return response()->json($request->all());

        try{
            Servicio::create($request->all());
            DB::commit();
            return redirect()->route('servicio.index')->with('exito', 'El Servicio ha sido registrado.');
        }catch(Exception $e){
            DB::rollBack();
        }catch(Throwable $t){
            DB::rollBack();
        }

        return redirect()->route('servicio.index')->with('error', 'No se pudo agregar el servicio.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {

       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $servicio)
    {
        //return response()->json($agencia);
        return view('servicio.edit', compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $servicio)
    {
         //return response()->json($request->all());

         $this->validate($request, [
            'nombre' => 'required|string|max:50',
            'costo_unitario' => 'required|string|max:50',
            'costo_total' => 'required|string|max:50',


            //'id_usuario' => 'required'
        ], [
          //  'nombre.required' => 'El campo nombre es obligatorio',
            //'apellido.required' => 'El campo apellido es obligatorio',

        ]);

        DB::beginTransaction();

        try{
            $servicio->update($request->all());
            DB::commit();
            return redirect()->route('servicio.index')->with('exito', 'El servicio ha sido actualizado correctamente.');
        }catch(Exception $e){
            DB::rollBack();
        }catch(Throwable $t){
            DB::rollBack();
        }

        return redirect()->route('servicio.index')->with('error', 'No se pudo actualizar la informacion del servicio.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio)
    {
        $servicio->estado = 0;
        $servicio->update();
        return redirect()->route('servicio.index')->with('exito', 'Servicio eliminado correctamente.');
    }
}
