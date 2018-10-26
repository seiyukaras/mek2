<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comentarios;

class Blog extends Model
{
    protected $table = 'blog';

    public function getDiaFormat()
	{
    	return \Carbon\Carbon::parse($this->created_at)->format('d/m/Y');
	}

	public function getDescrip300()
	{
    	$str = str_split($this->descripcion, 300);
    	return $str[0];
	}

	public function comments()
    {
        return $this->hasMany(Comentarios::class);
    }

    public function getDateDiferencia() {
        \Carbon\Carbon::setLocale('es');
        $dia = \Carbon\Carbon::parse($this->created_at);
        $now = \Carbon\Carbon::now();
        return $dia->diffForHumans($now);
    }
}
