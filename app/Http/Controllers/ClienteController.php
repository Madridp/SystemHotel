<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;
use Exception;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        #referencia a la ruta que se va ir

        #todos los registros de los cliente
        #guarda en la variable clientes a todos los clientes
        $clientes=Cliente::all();

        return view('cliente.index', [
            #creando una variable activePage con el valor cliente-index
            #para saber en que opcionmenu estoy
            'activePage' => 'cliente-index',
            #creacion de la variable cliente
            #mando a la vista la variable clientes
            'clientes' => $clientes

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
        return view('cliente.crear', [
            'activePage' => 'cliente-crear'


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
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'telefono' => 'required|string|max:50',
            'email' => 'required|string|max:50',
            'dpi' => 'required|string|max:200',
            'id_usuario' => 'required'
        ], [
            'nombre.required' => 'El campo nombre es obligatorio',
            'apellido.required' => 'El campo apellido es obligatorio',
            'dpi.required' => 'El campo DPI es obligatorio',
        ]);

        DB::beginTransaction();
        //imprimir en el navegador una respuesta en formato json debugear
         //return response()->json($request->all());

        try{
            Cliente::create($request->all());
            DB::commit();
            return redirect()->route('cliente.index')->with('exito', 'El cliente ha sido registrado.');
        }catch(Exception $e){
            DB::rollBack();
        }catch(Throwable $t){
            DB::rollBack();
        }

        return redirect()->route('cliente.index')->with('error', 'No se pudo registrar el cliente.');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
