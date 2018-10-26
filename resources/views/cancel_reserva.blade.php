@extends('app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12 text-center">
        <h2 class="title"><i class="material-icons">delete_sweep</i> Cancelar Reservación en M`KA</h2>
        <h4 class="text-center description">Puede cancelar o no la reservacion!.</h4>
    </div>   
    <div class="col-md-12">
        <div class="container">
            <form method="POST" action="{{action('ReservaController@cancelReserva', $reserva)}}">
            @csrf
            {{ method_field('DELETE') }}
                <div class="row col-md-12">
                <span class="col-md-3 badge badge-pill badge-info">Nombre</span>
                <span class="col-md-3 badge badge-pill badge-info">Correo</span>
                <span class="col-md-2 badge badge-pill badge-info">Teléfono</span>
                <span class="col-md-2 badge badge-pill badge-info">Día</span>
                <span class="col-md-1 badge badge-pill badge-info">Hora</span>
                <span class="col-md-1 badge badge-pill badge-info">Personas</span>
            </div>
            <div class="row col-md-12 text-center">
                <span class="col-md-3 text-light-gray">{{ $reserva->name }}</span>
                <span class="col-md-3 text-light-gray">{{ $reserva->email }}</span>
                <span class="col-md-2 text-light-gray">{{ $reserva->phone }}</span>
                <span class="col-md-2 text-light-gray">{{ $reserva->getDiaFormat() }}</span>
                <span class="col-md-1 text-light-gray">{{ $reserva->getHoraFormat() }}</span>
                <span class="col-md-1 text-light-gray">{{ $reserva->personas }}</span>
            </div>
            <div class="col-md-12">
                <div class="input-group form-group">
                    <label class="bmd-label-floating" style="margin-left: 55px;">Por favor, ingrese el por que se cancela*</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="material-icons">edit</i>
                        </span>
                    </div>
                    <textarea class="form-control" rows="7" name="message"></textarea>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <button class="btn btn-rose btn-raised btn-round" type="submit" onclick="return confirm('Esta seguro que desea cancelar la RESERVACION?')">Cancelar Reservacion</button>
            </div>
        </form>
        </div> 
    </div>    
</div>
@endsection
