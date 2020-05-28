@extends('layouts.admin', ['activePage' => 'cliente-edit', 'titlePage' => __('Gestor de Clientes')])

@section('main-content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('cliente.update', $cliente) }}" autocomplete="off"
                    class="form-horizontal">
                    @csrf
                    @method('put')
                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('Agregar nuevo Cliente') }}</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body ">
                            {{--@if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                        @endif--}}
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <a href="{{ route('cliente.index') }}"
                                    class="btn btn-primary">{{ __('Regresar a ver clientes') }}</a>
                            </div>
                        </div>
                        <br>   <!-- Salto de linea -->
                        <div class="row">
                            <!-- NOMBRE -->
                            <label class="col-sm-2 col-form-label" for="input-nombre">{{ __('Nombre: ') }}</label>
                            <div class="col-sm-3">
                                <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }}">
                                    <input class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}"
                                        name="nombre" id="input-nombre" type="text" placeholder="{{ __('Nombre') }}"
                                        value="{{ old('nombre', $cliente->nombre) }}" aria-required="true" />
                                    @if ($errors->has('nombre'))
                                    <span class="error text-danger">{{ $errors->first('nombre') }}</span>
                                    @endif
                                </div>
                            </div>


                                <!-- APELLIDO -->
                                <label class="col-sm-2 col-form-label" for="input-apellido">{{ __('Apellido: ') }}</label>
                                <div class="col-sm-3">
                                    <div class="form-group{{ $errors->has('apellido') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }}"
                                            name="apellido" id="input-apellido" type="text"
                                            placeholder="{{ __('Apellido') }}" value="{{ old('apellido', $cliente->apellido) }}"
                                            aria-required="true" />
                                        @if ($errors->has('apellido'))
                                        <span class="error text-danger">{{ $errors->first('apellido') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        <br>   <!-- Salto de linea -->

                        <div class="row">
                            <!-- TELEFONO -->
                            <label class="col-sm-2 col-form-label">{{ __('Telefono:') }}</label>
                            <div class="col-sm-3">
                                <div class="form-group{{ $errors->has('telefono') ? ' has-danger' : '' }}">
                                    <input class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}"
                                        name="telefono" id="input-telefono" type="text"
                                        placeholder="{{ __('Telefono') }}" value="{{ old('telefono', $cliente->telefono) }}" />
                                    @if ($errors->has('telefono'))
                                    <span class="error text-danger">{{ $errors->first('telefono') }}</span>
                                    @endif
                                </div>
                            </div>

                            <!-- Email-->
                            <label class="col-sm-2 col-form-label">{{ __('Email:') }}</label>
                            <div class="col-sm-3">
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        name="email" id="input-email" type="text"
                                        placeholder="{{ __('Email') }}" value="{{ old('email', $cliente->email) }}" />
                                    @if ($errors->has('email'))
                                    <span class="error text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                        <br>   <!-- Salto de linea -->

                        <!-- Mandar el id del usuario logeado o autenticado -->
                     <input type="hidden" name="id_usuario" value="{{ auth()->user()->id }}">

                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
