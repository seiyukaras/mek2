<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Http\Requests\ReservaStoreRequest;
use Illuminate\Support\Facades\Mail;

class ReservaController extends Controller
{
    public function createReserva(ReservaStoreRequest $request) 
    {
    	$reserva = new Reserva();

        $reserva->name = $request->get('name');
        $reserva->phone = $request->get('phone');
        $reserva->email = $request->get('email');
        $reserva->estado = 1;
        $reserva->dia = date("Y-m-d", strtotime($request->get('dia')));
        $reserva->hora = date("H:i:s", strtotime($request->get('hora')));
        $reserva->personas = $request->get('personas');
    	$reserva->save();

    	return redirect('/');
    }

    public function listReserva(Request $request) 
    {
    	$reservas = Reserva::orderBy('id', 'DESC');

    	if($request->input('searchday'))
    	{
    		$reservas->where('dia','=',date('Y-m-d',strtotime($request->input('searchday'))));
    	}
    	
    	$reservas = $reservas->paginate(10);

    	return view('listado_reserva',compact('reservas'));
    }

    public function confirmReserva($id) {
    	$reserva = Reserva::find($id);
    	$reserva->estado = 2;
    	$reserva->save();

    	Mail::to($reserva->email)->send(new \App\Mail\ReservaMail($reserva));

    	return redirect()->route('listReserva');
    }

    public function cancelarReserva($id)
    {
        $reserva = Reserva::find($id);

        return view('cancel_reserva',compact('reserva'));
    }

    public function cancelReserva(Request $request, $id) {
    	$reserva = Reserva::find($id);
    	Mail::to($reserva->email)->send(new \App\Mail\ReservaCancelMail($reserva,$request->get('message')));

    	$reserva->delete();
    	return redirect()->route('listReserva');
    }

    public function destroy($id) {
    	$reserva = Reserva::find($id);
    	
    	$reserva->delete();
    	return redirect()->route('listReserva');
    }
}
