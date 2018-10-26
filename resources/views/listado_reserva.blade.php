@extends('app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12 text-center">
        <h2 class="title"><i class="material-icons">library_books</i> Libro de Reservaciones en M`KA</h2>
    </div> 
    <div class="row col-md-6 justify-content-end"> 
        <form action="{{ action('ReservaController@listReserva')}}" method="get" class="form-inline ml-auto">
            <div class="input-group form-group" id="datepicker">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="material-icons">today</i>
                    </span>
                </div>
                <input data-format="yyyy/MM/dd" type="text" placeholder="Seleccione el Día..." class="form-control datepicker" name="searchday" required>
            </div>
            <button class="btn btn-fab btn-round btn-rose" type="submit" style="margin-top: 25px;"><i class="fa fa-search add-on"></i></button>  
        </form>   
    </div>
    <div class="row col-md-12 justify-content-center"> 
        <div class="col-md-8">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Teléfono</th>
                            <th>Personas</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reservas as $reserva)
                            <tr>
                                <td class="align-middle">{{ $reserva->id }}</td>
                                <td class="align-middle"><i class="fa fa-user"></i> {{ $reserva->name }}</td>
                                <td class="align-middle"><span class="text-rose">{{ $reserva->email }}</span></td>
                                <td class="align-middle"><i class="fa fa-calendar"></i> {{ $reserva->getDiaFormat() }}</td>
                                <td class="align-middle"><i class="fa fa-clock-o"></i> {{ $reserva->getHoraFormat() }}</td>
                                <td class="align-middle"><i class="fa fa-phone"></i> {{ $reserva->phone }}</td>
                                <td class="align-middle"><span class="badge badge-pill badge-info">{{ $reserva->personas }}</span></td>
                                <td class="align-middle">
                                        @if ($reserva->estado == 1)
                                        <form action="{{action('ReservaController@confirmReserva', $reserva)}}" method="post" class="form-inline">
                                            @csrf
                                            {{ method_field('PUT') }}
                                            <button type="submit" data-toggle="tooltip" title="Confirmar reservación" class="btn btn-fab btn-round btn-rose"><i class="fa fa-check-square-o fa-lg"></i></button>
                                            <a data-toggle="tooltip" title="Cancelar reservación" class="button btn btn-fab btn-round btn-rose" href="{{ route('cancelarReserva', ['id' => $reserva->id]) }}"><i class="fa fa-remove fa-lg"></i></a>
                                        </form>
                                        @endif
                                        @if ($reserva->estado == 2)
                                        <form action="{{action('ReservaController@destroy', $reserva)}}" method="post">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button data-toggle="tooltip" class="button btn btn-fab btn-round btn-rose" title="Eliminar reservación" onclick="return confirm('Esta seguro que desea cancelar la RESERVACION?')" type="submit">
                                                <i class="fa fa-trash fa-lg"></i>
                                            </button>
                                        </form>
                                        @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $reservas->links() }}  
        </div>
    </div>
</div>
@endsection
