@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Productos Registrados') }}</h1>

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
                    <h6 class="m-0 font-weight-bold text-primary">Productos</h6>
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
                                    <h4 class="card-title ">{{ __('Lista de Productos') }}</h4>

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
                                            <a href="{{ route('producto.index') }}" class="btn btn-md btn-primary">{{ __('Registrar Producto') }}</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>{{ __('Nombre Producto') }}</th>
                                                <th>{{ __('Descripcion') }}</th>
                                                <th>{{ __('Precio Compra') }}</th>
                                                <th>{{ __('Precio Venta') }}</th>
                                                <th>{{ __('Unidades') }}</th>
                                                <th>{{ __('Categoria') }}</th>
                                                <th class="text-right">{{ __('Operaciones') }}</th>
                                            </thead>
                                            <tbody>
                                                @foreach($productos as $producto)
                                                <tr>
                                                    <!--imprimir datos en pantalla-->
                                                    <td>{{ $producto->nombre }}</td>
                                                    <td>{{ $producto->descripcion }}</td>
                                                    <td>{{ $producto->precio_compra }}</td>
                                                    <td>{{ $producto->precio_venta }}</td>
                                                    <td>{{ $producto->unidades }}</td>
                                                    <td>{{ $producto->categoria }}</td>
                                                    <td class="td-actions text-right">
                                                        <form action="{{ route('producto.destroy', $producto) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('producto.edit', $producto) }}" data-original-title="" title="">
                                                                <i class="material-icons" style="color: white; font-weight: bolder;" >Editar</i>
                                                                <div class="ripple-container"></div>
                                                            </a>
                                                            <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("¿Estás seguro de querer eliminar este registro?") }}') ? this.parentElement.submit() : ''">
                                                                <i class="material-icons" style="color: white; font-weight: bolder;" >Eliminar</i>
                                                                <div class="ripple-container"></div>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
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

