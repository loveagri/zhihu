<?php

namespace App;

class AdminPermission extends Model
{
    protected $table = 'admin_permissions';

    public function roles()
    {
        return $this->belongsToMany(
            AdminRole::class,
            'admin_permission_role',
            'role_id',
            'permission_id'
        )->withPivot(['permission_id', 'role_id']);
    }


}



























