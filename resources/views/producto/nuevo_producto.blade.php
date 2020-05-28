@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Registro de Nuevo Producto') }}</h1>

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
                    <h6 class="m-0 font-weight-bold text-primary">Ingresar Producto</h6>
                </div>

                <div class="card-body">

                    <form method="post" action="{{ route('cliente.store') }}" autocomplete="off" class="form-horizontal">
                        <!--esto es con blade-->
                        @csrf <!--etiqueta para el cifrado de paginas (proteccion contra rutas) valida tokens de seguridad -->
                        <!--Esto es lo mismo que lo anterior  -->
                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}


                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="nombre">Nombre<span class="small text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-user" name="nombre" placeholder="{{ __('Nombre') }}" value="{{ old('nombre') }}" required autofocus>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="last_name">Descripcion<span class="small text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-user" name="descripcion" placeholder="{{ __('Descripcion') }}" value="{{ old('descripcion') }}" required autofocus>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="telefono">Precio Compra</label>
                                        <input type="text" class="form-control form-control-user" name="precio_compra" placeholder="{{ __('Precio Compra') }}" value="{{ old('precio_compra') }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="email">Precio Venta</label>
                                        <input type="text" class="form-control form-control-user" name="precio_venta" placeholder="{{ __('Precio Venta') }}" value="{{ old('precio_venta') }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="telefono">Categoria</label>
                                        <input type="text" class="form-control form-control-user" name="categoria" placeholder="{{ __('Categoria') }}" value="{{ old('categoria') }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="email">Unidades</label>
                                        <input type="text" class="form-control form-control-user" name="unidades" placeholder="{{ __('Unidades') }}" value="{{ old('unidades') }}" required>
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
                                    <button type="submit" class="btn btn-primary">Guardar Producto</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
