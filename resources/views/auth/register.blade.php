@extends('layouts.auth')

@section('main-content')
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
    
    </style>
<div class="container" id="login">
    <div class="row justify-content-center">
        <div class="card-body flex-center">
                                
            <img src="../img/registrar.png" width="250" height="250">
            
            
        </div>
        <div class="col-xl-6 col-lg-8 col-md-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row flex-center">
                        
                        <div class="col-lg-11">
                            <div class="p-5">
                                <div class="panel panel-primary">
                                    <div class="panel-heading text-center">
                                        <h1>Sistema Hotel</h1>
                                    </div>    
                                </div>

                                @if ($errors->any())
                                    <div class="alert alert-danger border-left-danger" role="alert">
                                        <ul class="pl-4 my-2">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('register') }}" class="user">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="form-group">
                                        <input style="
                                        FONT-SIZE: 10pt;"type="text" class="form-control form-control-user" name="name" placeholder="{{ __('Nombre') }}" value="{{ old('name') }}" required autofocus>
                                    </div>

                                    <div class="form-group">
                                        <input style="
                                        FONT-SIZE: 10pt;"type="text" class="form-control form-control-user" name="last_name" placeholder="{{ __('Apellido') }}" value="{{ old('last_name') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <input style="
                                        FONT-SIZE: 10pt;" type="email" class="form-control form-control-user" name="email" placeholder="{{ __('Dirección de correo electrónico') }}" value="{{ old('email') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <input style="
                                        FONT-SIZE: 10pt;"type="password" class="form-control form-control-user" name="password" placeholder="{{ __('Contraseña') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <input style="
                                        FONT-SIZE: 10pt;" type="password" class="form-control form-control-user" name="password_confirmation" placeholder="{{ __('Confirmar Contraseña') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <button style="
                                        FONT-SIZE: 10pt;" type="submit" class="btn btn-primary btn-user btn-block">
                                            {{ __('Registrar') }}
                                        </button>
                                    </div>
                                </form>

                                <hr>

                                <div class="text-center">
                                    <a style="
                                    FONT-SIZE: 9pt;" class="small" href="{{ route('login') }}">
                                        {{ __('¿Ya tienes una cuenta? ¡Iniciar sesión!') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
