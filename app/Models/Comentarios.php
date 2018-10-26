<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;
use App\Models\Reply;

class Comentarios extends Model
{
    protected $table = 'comentarios';

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }

    public function replys()
    {
        return $this->hasMany(Reply::class,'comentario_id');
    }

    public function getDateDiferencia() {
    	\Carbon\Carbon::setLocale('es');
    	$dia = \Carbon\Carbon::parse($this->created_at);
    	$now = \Carbon\Carbon::now();
    	return $dia->diffForHumans($now);
    }
}
