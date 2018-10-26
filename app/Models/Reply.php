<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comentarios;

class Reply extends Model
{
    protected $table = 'reply';

    public function comments()
    {
        return $this->belongsTo(Comentarios::class, 'comentario_id');
    }

    public function getDateDiferencia() {
    	\Carbon\Carbon::setLocale('es');
    	$dia = \Carbon\Carbon::parse($this->created_at);
    	$now = \Carbon\Carbon::now();
    	return $dia->diffForHumans($now);
    }
}
