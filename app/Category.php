<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['nombre'];

    public function advertisement()
    {
        return $this->hasMany(Advertisement::class, 'IDCategoria');
    }
}
