<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = ['TipoDePago', 'IDUsuario'];

    public function user()
    {
        return $this->belongsTo(User::class, 'IDUsuario');
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'IDFormaDePago');
    }
}