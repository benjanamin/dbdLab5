<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function permissionrols()
    {
        return $this->hasMany(RolPermission::class, 'IDPERMISSION');
    }
}
