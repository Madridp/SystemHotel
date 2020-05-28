@extends('layouts.admin', ['activePage' => 'reservacion-index', 'titlePage' => __('Gestor de reservaciones')])


@section('main-content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">{{ __('Reservaciones') }}</h4>
                        <p class="card-category"> {{ __('Lista de reservacion') }}</p>
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
                                <a href="{{ route('reservacion.create') }}" class="btn btn-md btn-primary">{{ __('Crear nueva Reservacion') }}</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>{{ __('DPI Cliente') }}</th>
                                    <th>{{ __('Fecha Ingreso') }}</th>
                                    <th>{{ __('Fecha Salida') }}</th>
                                    <th>{{ __('Tipo Habitacion') }}</th>
                                    <th>{{ __('Costo') }}</th>
                                    <th class="text-right">{{ __('Operaciones') }}</th>
                                </thead>
                                <tbody>
                                    @foreach($reservaciones as $reservacion)
                                    <tr>
                                        <!--imprimir datos en pantalla-->
                                        <td>{{ $reservacion->cliente ? $reservacion->cliente ['dpi']:'' }}</td>
                                        <td>{{ $reservacion->fecha_ingreso }}</td>
                                        <td>{{ $reservacion->fecha_salida}}</td>
                                        <td>{{ $reservacion->habitacion? $reservacion->habitacion->tipo_habitacion['descripcion']:'' }}</td>
                                        <td>{{ $reservacion->habitacion? $reservacion->habitacion->tipo_habitacion['costo']:'' }}</td>
                                        <td class="td-actions text-right">
                                            <form action="{{ route('reservacion.destroy', $reservacion) }}" method="post">
                                                @csrf
                                                @method('delete')

                                                <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("¿Estás seguro de querer eliminar este registro?") }}') ? this.parentElement.submit() : ''">
                                                    <i class="material-icons" style="color: white; font-weight: bolder;" >Cancelar Reservacion</i>
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
