@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Registro de Nuevo Cliente') }}</h1>

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
                    <h6 class="m-0 font-weight-bold text-primary">Ingresar Cliente</h6>
                </div>

                <div class="card-body">

                    <form method="post" action="{{ route('cliente.store') }}" autocomplete="off" class="form-horizontal">
                        <!--esto es con blade-->
                        @csrf <!--etiqueta para el cifrado de paginas (proteccion contra rutas) valida tokens de seguridad -->
                        <!--Esto es lo mismo que lo anterior  -->
                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}


                        <h6 class="heading-small text-muted mb-4">Informacion del Cliente</h6>

                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="nombre">Nombre<span class="small text-danger">*</span></label>
                                        <input type="text" id="nombre" class="form-control form-control-user" name="nombre" placeholder="{{ __('Nombre') }}" value="{{ old('nombre') }}" required autofocus>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="last_name">Apellido<span class="small text-danger">*</span></label>
                                        <input type="text" id="apellido" class="form-control form-control-user" name="apellido" placeholder="{{ __('Apellido') }}" value="{{ old('apellido') }}" required autofocus>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="telefono">Telefono</label>
                                        <input type="number" min="11111111" id="telefono" class="form-control form-control-user" name="telefono" placeholder="{{ __('Telefono') }}" value="{{ old('telefono') }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="email">Correo Electronico</label>
                                        <input type="email" id="email" class="form-control form-control-user" name="email" placeholder="{{ __('ejemplo@.com') }}" value="{{ old('email') }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="dpi">DPI<span class="small text-danger">*</span></label>
                                        <input type="number" min="1111111111111" id="dpi" class="form-control form-control-user" name="dpi" placeholder="{{ __('DPI') }}" value="{{ old('dpi') }}" required autofocus>
                                    </div>
                                </div>


                        </div>

                    <!-- Mandar el id del usuario logeado o autenticado -->
                    <input type="hidden" name="id_usuario" value="{{ auth()->user()->id }}">

                        <!-- Button -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Guardar Cliente</button>
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
         

    </script>
@endsection