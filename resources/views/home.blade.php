@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Principal') }}</h1>

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



            <!-- Creando el primer enlace -->
            <div style="height: 400px; ">
                <a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion -1 </a>
                     &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                <a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion -2 </a>
                     &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                <a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion -3 </a>
                     &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                <a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion -4 </a>
                     &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                <a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion -5 </a>
                     &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                <a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion -6 </a>
                     &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                <a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion -7 </a>
                    <br> <br>  <!-- Salto de linea -->
                <a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion -8 </a>
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
               <a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion -9 </a>
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
               <a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion 10 </a>
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
               <a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion 11 </a>
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
               <a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion 12 </a>
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                <a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion 11 </a>
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                <a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion 13 </a>
                    <br> <br>  <!-- Salto de linea -->
                <a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion 14 </a>
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
               <a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion 15 </a>
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
               <a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion 16 </a>
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
               <a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion 17 </a>
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
               <a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion 18 </a>
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                <a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion 19 </a>
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
            </div>


            <!-- <form method="POST" action="{{ route('register') }}" class="user">

                <div class="form-group ">
                        <div class="col-lg-4 mb-4">
                            <div class="card bg-primary text-white shadow">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        {{ __('Habitacion') }}
                                    </button>
                                </div>
                            </div>
                        </div>-->





    </div>
@endsection
