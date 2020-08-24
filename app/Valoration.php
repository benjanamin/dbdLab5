<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valoration extends Model
{
    protected $fillable = ['Titulo', 'Estrellas', 'Comentario', 'IDUsuario', 'IDAnuncio'];

    public function user()
    {
        return $this->belongsTo(User::class, 'IDUsuario');
    }

    public function advertisement()
    {
        return $this->belongsTo(Advertisement::class, 'IDAnuncio');
    }
}
