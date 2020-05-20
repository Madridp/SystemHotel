@extends('layouts.admin')

 
 @section('main-content')
 

 
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Nueva Reservacion') }}</h1>

    @if ($errors->any())
    <div class="alert alert-danger border-left-danger" role="alert">
        <ul class="pl-4 my-2">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif    

    <div class="row">

        <!--Tamaño del recuadro donde se solicitan los datos-->
        <div class="col-lg-12 order-lg-1">

            <!--tipo de sombra de cuadros-->
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Agregar Reservacion</h6>
                </div>

                <div class="card-body">

                    <form method="POST" action="#" autocomplete="off">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="hidden" name="_method" value="PUT">

                        <h6 class="heading-small text-muted mb-4">Informacion para la Reservacion</h6>
                        <h6 class="m-4 text-default"><span class="small text-danger">*</span>Campos obligatorios</h6>
                        <hr>
                        <div class="pl-lg-4">
                            <div class="row">
                                
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="fecha_reserva">Fecha para la Reservacion<span class="small text-danger">*</span></label>
                                        <input type="date" required="" id="fecha_reserva"
                                        min="2020-01-01" max="2030-12-31" class="form-control" name="fecha_reserva" placeholder="Reservacion"/> 
                                        <span class="validity"></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="fecha_ingreso">Fecha Ingreso Cliente</label>
                                        <input type="date" id="fecha_ingreso"
                                        min="2020-01-01" max="2030-12-31" class="form-control" name="fecha_ingreso" placeholder="Ingreso"/> 
                                        <span class="validity"></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="fecha_salida">Fecha Salida Cliente</label>
                                        <input type="date" id="fecha_salida"
                                        min="2020-01-01" max="2030-12-31" class="form-control" name="fecha_salida" placeholder="Salida"/> 
                                        <span class="validity"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="costo">Costo<span class="small text-danger">*</span></label>
                                        <input type="text" required="" pattern="[0-9]+" id="costo" class="form-control" name="costo" placeholder="Costo de la reserva">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="id_cliente">DPI Cliente<span class="small text-danger">*</span></label>
                                        <select id="id_cliente" class="form-control" name="id_cliente" required>
                                            <option value="">Elige una opción</option>                                   
                                            @foreach($clientes as $cliente)
                                                    <option value="{{$cliente->id}}">{{ $cliente->dpi}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="nombre">Nombre Cliente</label>
                                       
                                     <input type="text" id="txt_nombre" class="form-control" name="nombre" placeholder="Nombre" value="" disabled="disabled">
                                           
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="telefono">Telefono Cliente</label>
                                        <input type="text" id="txt_telefono" class="form-control" name="telefono" placeholder="Telefono" value="" disabled="disabled">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="email">Correo electronico</label>
                                        <input type="email" id="txt_email" class="form-control" name="email" placeholder="Correo electronico" value="" disabled="disabled">
                                    </div>
                                </div>
                        </div>

                        <!-- Button -->
                        <div class="pl-lg-4">
                           
                                
                            
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Guardar Reservacion</button>
                                </div>
                            </div>
                        
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>
@endsection
@section('javascript_extra')
    <script>
         var clientes_cargados = @json($clientes);
   document.getElementById('id_cliente').addEventListener('change', function(){
     let select_clientes = document.getElementById('id_cliente');   // combo de los clientes
     var seleccionado = this.options[select_clientes.selectedIndex];  // se obtienen el index del item seleccionado
     let id_cliente_seleccionado = seleccionado.value; // se obtiene el value del item seleccionado
    let dpi_cliente_seleccionado = seleccionado.text; // se obtiene el texto del item seleccionado

   //alert("Id seleccionado: " + id_cliente_seleccionado + " con dpi: " + dpi_cliente_seleccionado);
   alert("Datos del usuario seleccionados correctamente");

        for (var contador = 0; contador <= clientes_cargados.length; contador++){
            if ( clientes_cargados[contador]['id'] == id_cliente_seleccionado ) {
         //alert("El cliente seleccionado se llama: " + clientes_cargados[contador]['nombre_cliente']);

        document.getElementById("txt_nombre").value=clientes_cargados[contador]['nombre']+ " " + clientes_cargados[contador]['apellido'];
        document.getElementById("txt_telefono").value = clientes_cargados[contador]['telefono'];
        document.getElementById("txt_email").value = clientes_cargados[contador]['email'];
        break;
        }
        
        }
    });
   
    </script>
    
@endsection