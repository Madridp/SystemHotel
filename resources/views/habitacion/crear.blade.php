@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Registro de Nuevas Habitaciones') }}</h1>

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
                    <h6 class="m-0 font-weight-bold text-primary">Ingresar Habitacion</h6>
                </div>

                <div class="card-body">

                    <form method="post" action="{{ route('habitacion.store') }}" autocomplete="off" class="form-horizontal">
                        <!--esto es con blade-->
                        @csrf <!--etiqueta para el cifrado de paginas (proteccion contra rutas) valida tokens de seguridad -->
                        <!--Esto es lo mismo que lo anterior  -->
                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}


                        <h6 class="heading-small text-muted mb-4">Informacion de las habitaciones</h6>

                        <div class="pl-lg-4">

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="id_tipo_habitacion">Tipo de Habitacion</label>
                                        <select id="id_tipo_habitacion" class="form-control" name="id_tipo_habitacion" required>
                                            @foreach($tipo_habitaciones as $tipo_habitacion)
                                            <option value="{{$tipo_habitacion->id}}">{{ $tipo_habitacion->descripcion}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="id_disponibilidad">Disponibilidad</label>
                                        <select id="id_disponibilidad" class="form-control" name="id_disponibilidad" required>
                                            @foreach($disponibilidades as $disponibilidad)
                                            <option value="{{$disponibilidad->id}}">{{ $disponibilidad->descripcion}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="id_servicio">Servicio que Incluye<span class="small text-danger">*</span></label>
                                        <select id="id_servicio" class="form-control" name="id_servicio" required>
                                        @foreach($servicios as $servicio)
                                        <option value="{{$servicio->id}}">{{ $servicio->nombre}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>

                            </div>


                        </div>

                     <!-- Mandar el id del usuario logeado o autenticado -->


                        <!-- Button -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Registrar Habitacion</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
