<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $fillable = ['Titulo', 'Cantidad', 'Descripcion', 'PrecioUnitario', 'IDUsuario', 'IDCategoria'];

    public function valoration()
    {
        return $this->hasMany(Valoration::class, 'IDAnuncio');
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'IDAnuncio');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'IDUsuario');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'IDCategoria');
    }
}
