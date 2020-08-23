<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function order()
    {
        return $this->belongsTo(Order::class, 'IDOrden');
    }

    public function paymentmethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'IDFormaDePago');
    }
}
