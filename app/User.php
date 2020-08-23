<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function paymentmethods()
    {
        return $this->hasMany(PaymentMethod::class, 'IDUsuario');
    }

    public function valorations()
    {
        return $this->hasMany(Valoration::class, 'IDUsuario');
    }

    public function advertisements()
    {
        return $this->hasMany(Advertisement::class, 'IDUsuario');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'IDUsuario');
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'IDROL');
    }
}
