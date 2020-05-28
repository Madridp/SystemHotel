@extends('layouts.admin')

<style>
    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }
    #login {

            padding: 10em;

    }
    #font{
        font-size: 18px;
    }

    .confondo {
   background-color: rgb(26, 218, 99);
   border-radius: 5px;
 }
    </style>
@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Menú Principal') }}</h1>

    <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
        Habitaciones disponibles, reservadas y ocupadas!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

            <!-- <img src="../img/bed.png" width="80" height="80"> -->
            &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->

            <style>
                .reservada{
                    background-color: darkcyan;
                }

                .disponible{
                    background-color: green;
                }

                .ocupada{
                    background-color: orangered;
                }

                .limpieza{
                    background-color: aqua;
                }
            </style>


            <div class="row">
                @foreach($habitaciones as $habitacion)
                <?php
                    $estado_disponibilidad = "";

                    switch ($habitacion->id_disponibilidad) {
                        case 1:
                            $estado_disponibilidad = "disponible";
                            break;
                        case 2:
                            $estado_disponibilidad = "ocupada";
                            break;
                        case 3:
                            $estado_disponibilidad = "reservada";
                            break;
                        case 4:
                            $estado_disponibilidad = "limpieza";
                            break;
                        default:
                            break;
                    }
                ?>
                <div class="col-md-2 col-sm-7 mb-3">
                    <div class="card "></div>
                    <div class="card {{ $estado_disponibilidad }} ">
                        <div class="card-body">
                            <div class="card-title" >
                                <h4 style="text-align: center">{{ __('Habitación #')}} {{  $habitacion->id }}</h4>
                            </div>

                            <img src="{{asset('img/bed.png')}}" width="100" height="100" class="card-img-top" alt="habitacion">
                        </div>
                        <div class="card-footer">
                            {{ __('Estado: ') }}  {{ $habitacion->disponibilidad_habitacion ? $habitacion->disponibilidad_habitacion->descripcion : '' }}
                            <div class="row">
                               {{--<a href="{{ route('habitacion.show', $habitacion) }}">Ver habitación</a>--}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

@endsection
