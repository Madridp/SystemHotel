@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Registro de Servicios a Cuarto') }}</h1>

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
                    <h6 class="m-0 font-weight-bold text-primary">Habitaciones Ocupadas para Servicio a Cuarto</h6>
                </div>

                <div class="card-body">

                    <form method="post" action="{{ route('servicio.store') }}" autocomplete="off" class="form-horizontal">
                        <!--esto es con blade-->
                        @csrf <!--etiqueta para el cifrado de paginas (proteccion contra rutas) valida tokens de seguridad -->
                        <!--Esto es lo mismo que lo anterior  -->
                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}



                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">{{ __('Lista de Habitaciones') }}</h4>

                                </div>
                                <div class="card-body">
                                    @if (session('exito'))
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <i class="material-icons">close</i>
                                                </button>
                                                <span>{{ session('exito') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @if (session('error'))
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="alert alert-danger">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <i class="material-icons">close</i>
                                                </button>
                                                <span>{{ session('error') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="row">
                                     <div class="col-12 text-right">
                                            <a href="{{ route('producto.create') }}" class="btn btn-md btn-primary">{{ __('Registrar Producto') }}</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>{{ __('No. Habitacion') }}</th>
                                                <th>{{ __('Tipo de Habitacion') }}</th>
                                                <th>{{ __('Costo') }}</th>

                                                <th class="text-right">{{ __('Operaciones') }}</th>
                                            </thead>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>

                </div>

            </div>

        </div>






    </div>

@endsection
