<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['Estado', 'Cantidad', 'IDUsuario', 'IDAnuncio'];

    public function transaction()
    {
        return $this->hasOne(Transaction::class, 'IDOrden');
    }

    public function advertisement()
    {
        return $this->belongsTo(Advertisement::class, 'IDAnuncio');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'IDUsuario');
    }
}
