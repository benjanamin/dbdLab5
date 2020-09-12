<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['RUT', 'nombre', 'email', 'password', 'direccion', 'telefono', 'fechaDeNacimiento', 'IDROL'];

    protected $hidden = ['password'];

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
