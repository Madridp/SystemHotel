@extends('layouts.admin', ['activePage' => 'cliente-index', 'titlePage' => __('Gestor de Clientes')])


@section('main-content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">{{ __('Habitaciones') }}</h4>
                        <p class="card-category"> {{ __('Lista de Habitaciones') }}</p>
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
                                <a href="{{ route('cliente.create') }}" class="btn btn-md btn-primary">{{ __('Agregar Nueva Habitacion') }}</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>{{ __('Tipo Habitacion') }}</th>
                                    <th>{{ __('Disponibilidad') }}</th>
                                    <th>{{ __('Costo ') }}</th>
                                    <th class="text-right">{{ __('Operaciones') }}</th>
                                </thead>
                                <tbody>
                                    @foreach($habitaciones as $habitacion)
                                    <tr>
                                        <!--imprimir datos en pantalla-->
                                        <td>{{ $habitacion->tipo_habitacion ? $habitacion->tipo_habitacion ['descripcion']:'' }}</td>
                                        <td>{{ $habitacion->disponibilidad_habitacion ? $habitacion->disponibilidad_habitacion ['descripcion']:'' }}</td>
                                        <td>{{ $habitacion->disponibilidad }}</td>
                                        <td class="td-actions text-right">
                                            <form action="{{ route('habitacion.destroy', $habitacion) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('habitacion.edit', $habitacion) }}" data-original-title="" title="">
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
        </div>
    </div>
</div>
@endsection
