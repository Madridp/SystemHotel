@extends('layouts.auth')

@section('main-content')
<style>
    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }
    #login {
        
        padding: 11em;
        
}
</style>
<div class="container" id="login">

    <div class="row justify-content-center">
        <div class="card-body flex-center">
                                
            <img src="../img/lock.png" width="200" height="200">
            
            
        </div> 
        <div class="col-xl-6 col-lg-8 col-md-6">
            <div class="card o-hidden border-2 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row flex-center">
                        
                        <div class="col-lg-11">
                            <div class="p-4">
                                <div class="text-center">
                                    <h1 style="
                                    FONT-SIZE: 15pt; FONT-FAMILY: Comic Sans MS;
                                    ">{{ __('Resetear Contraseña') }}</h1>
                                </div>
                                <hr>
                                @if ($errors->any())
                                    <div class="alert alert-danger border-left-danger" role="alert">
                                        <ul class="pl-4 my-2">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if (session('status'))
                                    <div class="alert alert-success border-left-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('password.email') }}" class="user">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="form-group">
                                        <input  style="
                                        FONT-SIZE: 10pt;"type="text" class="form-control form-control-user" name="email" placeholder="{{ __('Direccion de correo electrónico') }}" value="{{ old('email') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-user btn-block" style="
                                        FONT-SIZE: 10pt;">
                                            {{ __('Enviar enlace de restablecimiento de contraseña') }}
                                        </button>
                                    </div>
                                </form>
                                    <div class="form-group text-center" style="
                                    FONT-SIZE: 9pt; FONT-FAMILY: Arial;
                                    " >
                                        <a href="{{ route('login') }}">Iniciar Sesión</a>
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
