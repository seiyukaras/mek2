@extends('app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-3">
        <img src="/img/logo-big.png" class="img-fluid">
    </div>
    <div class="col-md-6 justify-content-center text-center">
        <h2 class="title">Historia</h2>
        <h3 class="title text-uppercase">Cafeteria-Bar, Restaurante M`KA</h3>
    </div>
    <div class="col-md-3">
        <img src="/img/logo-big.png" class="img-fluid">
    </div>
    <div class="col-md-12">
        <img src="/img/1.png" class="img-fluid" width="100%"> 
    </div>
    <div class="col-md-8 text-center">
        <h2 class="title" style="margin-bottom: -100px;"><i class="material-icons">restaurant_menu</i> Carta Menu</h2>
    </div>
    <div class="col-md-8">
        @include('carusel')
    </div>
    <div class="col-md-12 text-center">
        <h2 class="title"><i class="material-icons">style</i> Galeria</h2>
    </div>
    @include('galeria') 
    <div class="col-md-12 text-center">
        <h2 class="title"><i class="material-icons">note_add</i> Reservar en M`KA</h2>
    </div>   
    <div class="col-md-12">
        <div class="container">
            <h4 class="text-center description">La confirmación de la reserva le llegara por correo una vez el administrador la ACEPTE.</h4>
            <form class="contact-form" action="{{ action('ReservaController@createReserva') }}" method="post">
            @csrf
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="input-group form-group">
                            <label class="bmd-label-floating" style="margin-left: 55px;">Nombre...</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">person</i>
                                </span>
                            </div>
                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" required>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert" style="margin-left: 55px;">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="input-group form-group">
                            <label class="bmd-label-floating" style="margin-left: 55px;">Teléfono...</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">contact_phone</i>
                                </span>
                            </div>
                            <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" type="text" name="phone" required>
                            @if ($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="input-group form-group">
                            <label class="bmd-label-floating" style="margin-left: 55px;">Correo...</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">mail</i>
                                </span>
                            </div>
                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="input-group form-group" id="datepicker">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">today</i>
                                </span>
                            </div>
                            <input data-format="yyyy/MM/dd" type="text" placeholder="Seleccione el Día..." class="form-control datepicker{{ $errors->has('dia') ? ' is-invalid' : '' }}" name="dia" required>
                            @if ($errors->has('dia'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('dia') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="input-group form-group" id="timepicker">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">alarm</i>
                                </span>
                            </div>
                            <input data-format="hh:mm:ss" type="text" placeholder="Seleccione la Hora..." class="form-control timepicker{{ $errors->has('hora') ? ' is-invalid' : '' }}" name="hora" required>
                            @if ($errors->has('hora'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('hora') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="input-group form-group">
                            <label class="bmd-label-floating" style="margin-left: 55px;">Cantidad de Personas...</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">people</i>
                                </span>
                            </div>
                            <input class="form-control{{ $errors->has('personas') ? ' is-invalid' : '' }}" type="text" name="personas" required>
                            @if ($errors->has('personas'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('personas') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-10 mb-30 text-center">
                            <button class="btn btn-rose btn-raised btn-round uppercase" type="submit">Reservar una mesa</button>
                        </div>
                    </div>
                </div>
            </form>
        </div> 
    </div>
    <div class="col-md-12 text-center">
        <h2 class="title"><i class="material-icons">contacts</i> Contacto</h2>
    </div>  
    <div class="row col-md-12 justify-content-center mb-5 my-5">
        <div class="col-md-11">
            @include('contacto') 
        </div>
    </div>
</div>
@endsection
