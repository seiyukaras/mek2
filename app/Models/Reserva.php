<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reserva';

	public function getDiaFormat()
	{
    	return \Carbon\Carbon::parse($this->dia)->format('d/m/Y');
	}

	public function getHoraFormat()
	{
    	return \Carbon\Carbon::parse($this->hora)->format('H:i');
	}
}
