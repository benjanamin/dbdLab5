<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable = ['Nombre', 'Descripcion'];
    
    public function rolpermissions()
    {
        return $this->hasMany(RolPermission::class, 'IDROL');
    }

    public function user()
    {
        return $this->hasMany(User::class, 'IDROL');
    }
}
