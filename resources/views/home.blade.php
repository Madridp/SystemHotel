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


            <!-- Creando el primer enlace -->
            <div style="height: 400px; ">
                
                <a id=boton1 class="btn btn-success btn-lg h-25 d-inline-block"  href="{{ route('reservacion.create') }}">
                    <img src="../img/bed.png" width="80" height="80"> Habitacion -1 </a>
                     &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                     &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                     <a class="btn btn-success btn-lg h-25 d-inline-block"  href="{{ route('reservacion.create') }}">
                        <img src="../img/bed.png" width="80" height="80"> Habitacion -2 </a>
                     &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                     &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                     <a class="btn btn-success btn-lg h-25 d-inline-block"  href="{{ route('reservacion.create') }}">
                        <img src="../img/bed.png" width="80" height="80"> Habitacion -3 </a>
                     &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                     &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                     <a class="btn btn-success btn-lg h-25 d-inline-block"  href="{{ route('reservacion.create') }}">
                        <img src="../img/bed.png" width="80" height="80"> Habitacion -4 </a>    
                     &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                     &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                     <br> <br>  <!-- Salto de linea -->
                     <a class="btn btn-success btn-lg h-25 d-inline-block"  href="{{ route('reservacion.create') }}">
                        <img src="../img/bed.png" width="80" height="80"> Habitacion -5 </a>
                     &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                     &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                     <a class="btn btn-success btn-lg h-25 d-inline-block"  href="{{ route('reservacion.create') }}">
                        <img src="../img/bed.png" width="80" height="80"> Habitacion -6 </a>
                     &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                     &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                     <a class="btn btn-success btn-lg h-25 d-inline-block"  href="{{ route('reservacion.create') }}">
                        <img src="../img/bed.png" width="80" height="80"> Habitacion -7 </a>
                        &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                        &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                    <a class="btn btn-success btn-lg h-25 d-inline-block"  href="{{ route('reservacion.create') }}">
                        <img src="../img/bed.png" width="80" height="80"> Habitacion -8 </a>
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                    <br> <br>  <!-- Salto de linea -->
                    <a class="btn btn-success btn-lg h-25 d-inline-block"  href="{{ route('reservacion.create') }}">
                        <img src="../img/bed.png" width="80" height="80"> Habitacion -9 </a>
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                    <a class="btn btn-info btn-lg h-25 d-inline-block"  href="{{ route('reservacion.create') }}">
                        <img src="../img/bed.png" width="80" height="80"> Habitacion 10 </a>
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                    <a class="btn btn-success btn-lg h-25 d-inline-block"  href="{{ route('reservacion.create') }}">
                        <img src="../img/bed.png" width="80" height="80"> Habitacion 11 </a>
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                    <a class="btn btn-success btn-lg h-25 d-inline-block"  href="{{ route('reservacion.create') }}">
                        <img src="../img/bed.png" width="80" height="80"> Habitacion 12 </a>
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                    <br> <br>  <!-- Salto de linea -->
                    <a class="btn btn-success btn-lg h-25 d-inline-block"  href="{{ route('reservacion.create') }}">
                        <img src="../img/bed.png" width="80" height="80"> Habitacion 13 </a>
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                    <a class="btn btn-danger btn-lg h-25 d-inline-block"  href="{{ route('reservacion.create') }}">
                        <img src="../img/bed.png" width="80" height="80"> Habitacion 14 </a>
                        &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                        &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                    <a class="btn btn-success btn-lg h-25 d-inline-block"  href="{{ route('reservacion.create') }}">
                        <img src="../img/bed.png" width="80" height="80"> Habitacion 15 </a>
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
               <!--a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion 15 </a-->
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
               <!--a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion 16 </a-->
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
               <!--a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion 17 </a-->
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
               <!--a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion 18 </a-->
                    &nbsp; &nbsp; &nbsp; <!-- Espacio en el navegador -->
                <!--a class="btn btn-primary btn-user h-25 d-inline-block"  href="{{ route('reservacion.create') }}"> Habitacion 19 </a-->
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
