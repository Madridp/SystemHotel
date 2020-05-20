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
                                
            <img src="../img/iniciar1.png">
            
            
        </div> 
        <div class="col-xl-6 col-lg-8 col-md-6">
            <div class="card o-hidden border-2 shadow-md my-4">
                
                <div class="card-body p-0">
                    
                    <div class="row flex-center">
                        
                        <div class="col-lg-11">
                            
                            <div class="p-4">
                                <div class="panel panel-primary">
                                    <div class="panel-heading text-center">
                                        <h1>Sistema Hotel</h1>
                                    </div>    
                                </div>
                            <div class="panel-body">    

                                @if ($errors->any())
                                    <div class="alert alert-danger border-left-danger" role="alert">
                                        <ul class="pl-4 my-2">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif    
                                    <form method="POST" action="{{ route('login') }}" class="user">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                     
                                        <div class="panel-body">
                                        <h4>Usuario: </h4>
                                        <input style="
                                        FONT-SIZE: 10pt;" type="email" class="form-control form-control-user" name="email" placeholder="Escribe tu usuario" value="{{ old('email') }}" required autofocus><br>
                                        <h4>Contraseña: </h4>
                                        <input style="
                                        FONT-SIZE: 10pt;" type="password" class="form-control form-control-user" name="password" placeholder="Escribe tu Contraseña" required>
                                    </div>
                                </div>

                                    <!--div class="form-group">
                                        <input type="email" class="form-control form-control-user" name="email" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autofocus>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password" placeholder="{{ __('Password') }}" required>
                                    </div-->

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox medium">
                                            <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="remember">{{ __('Recordar tu Contraseña') }}</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-user btn-block" style="
                                        FONT-SIZE: 12pt; FONT-FAMILY: Arial;
                                        ">
                                            {{ __('Ingresar') }}
                                        </button>
                                    </div>

                                    <hr>

                                    <!--div class="form-group">
                                        <button type="button" class="btn btn-github btn-user btn-block">
                                            <i class="fab fa-github fa-fw"></i> {{ __('Login with GitHub') }}
                                        </button>
                                    </div>

                                    <div class="form-group">
                                        <button type="button" class="btn btn-twitter btn-user btn-block">
                                            <i class="fab fa-twitter fa-fw"></i> {{ __('Login with Twitter') }}
                                        </button>
                                    </div>

                                    <div class="form-group">
                                        <button type="button" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> {{ __('Login with Facebook') }}
                                        </button>
                                    </div-->
                                </form>
                            
                               

                                @if (Route::has('password.request'))
                                    <div class="text-center">
                                        <a class="medium" href="{{ route('password.request') }}">
                                            {{ __('¿Olvidaste tu Contraseña?') }}
                                        </a>
                                    </div>
                                @endif

                                @if (Route::has('register'))
                                    <div class="text-center">
                                        <a class="medium" href="{{ route('register') }}">{{ __('¡Crear cuenta!') }}</a>
                                    </div>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
