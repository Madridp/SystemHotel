<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;
use Exception;

class ProductoController extends Controller
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
        $productos=Producto::all();

        #referencia a la ruta que se va ir
        return view('producto.index', [
            'activePage' => 'servicio-crear',

             'productos' => $productos

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
         return view('producto.nuevo_producto', [
            'activePage' => 'producto-crear'

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
            'descripcion' => 'required|string|max:50',
            'precio_compra' => 'required|numeric',
            'precio_venta' => 'required|numeric',
            'categoria' => 'required|string|max:200',
            'unidades' => 'required|numeric'
        ], [
            'nombre.required' => 'El campo nombre es obligatorio',
            'descripcion.required' => 'El campo descripcion es obligatorio',

        ]);

        DB::beginTransaction();
        //imprimir en el navegador una respuesta en formato json debugear
         //return response()->json($request->all());

        try{
            Producto::create($request->all());
            DB::commit();
            return redirect()->route('producto.index')->with('exito', 'El producto ha sido registrado.');
        }catch(Exception $e){
            DB::rollBack();
        }catch(Throwable $t){
            DB::rollBack();
        }

        return redirect()->route('producto.index')->with('error', 'No se pudo registrar el producto.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
