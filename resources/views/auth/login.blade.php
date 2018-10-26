@extends('layouts.app')

@section('content')
<div class="page-header header-filter" style="">
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <div class="card card-login">
                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf
                <div class="card-header card-header-primary text-center">
                    <h4 class="card-title">Acceder</h4>
                    <div class="social-line">
                        <a href="{{route('home')}}" class="btn btn-just-icon btn-link" data-toggle="tooltip" data-placement="top" title="Regresar" data-container="body">
                            <i class="material-icons">home</i>
                        </a>
                    </div>
                </div>
                <div class="card-body">

                    <div class="input-group form-group">
                        <label for="email" class="bmd-label-floating" style="margin-left: 55px;">Correo...</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">mail</i>
                            </span>
                        </div>
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required>
                        <span class="bmd-help" style="margin-left: 55px; margin-top: 40px;">Por favor, escriba el correo.</span>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert" style="margin-left: 55px; margin-top: 15px;">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="input-group form-group mb-0 my-5">
                        <label for="password" class="bmd-label-floating" style="margin-left: 55px;">Contraseña...</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">lock_outline</i>
                            </span>
                        </div>
                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        <span class="bmd-help" style="margin-left: 55px; margin-top: 40px;">Por favor, ingrese la contraseña.</span>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert" style="margin-left: 55px; margin-top: 15px;">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group text-center">
                        <button class="btn btn-primary btn-wd btn-round">Entrar</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div-->
</div>
@endsection
