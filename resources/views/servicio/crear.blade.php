@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Registro de Nuevo Servicio') }}</h1>

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
                    <h6 class="m-0 font-weight-bold text-primary">Ingresar Servicio</h6>
                </div>

                <div class="card-body">

                    <form method="post" action="{{ route('servicio.store') }}" autocomplete="off" class="form-horizontal">
                        <!--esto es con blade-->
                        @csrf <!--etiqueta para el cifrado de paginas (proteccion contra rutas) valida tokens de seguridad -->
                        <!--Esto es lo mismo que lo anterior  -->
                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}


                        <h6 class="heading-small text-muted mb-4">Informacion de los Servicios</h6>

                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="nombre">Nombre</label>
                                        <input type="text" class="form-control form-control-user" name="nombre" placeholder="{{ __('Nombre') }}" value="{{ old('nombre') }}" required >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="costo_unitario">Costo Unitario</label>
                                        <input type="text" class="form-control form-control-user" name="costo_unitario" placeholder="{{ __('costo unitario') }}" value="{{ old('costo_unitario') }}" required>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="costo_total">Costo Total</label>
                                        <input type="text" class="form-control form-control-user" name="costo_total" placeholder="{{ __('Costo Total') }}" value="{{ old('costo_total') }}" required >
                                    </div>
                                </div>
                            </div>

                        </div>

                    <!-- Mandar el id del usuario logeado o autenticado -->
                    <input type="hidden" name="id_usuario" value="{{ auth()->user()->id }}">

                        <!-- Button -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Guardar Servicio</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
