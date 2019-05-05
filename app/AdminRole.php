<?php

namespace App;


class AdminRole extends Model
{
    protected $table = 'admin_roles';

    public function permissions()
    {
        return $this->belongsToMany(
            AdminPermission::class,
            'admin_permission_role',
            'permission_id',
            'role_id'
            )->withPivot(['permission_id','role_id']);
    }

    public function grantPermission($permission)
    {
        return $this->permissions()->save($permission);
    }

    public function deletePermission($permission)
    {
        return $this->permissions()->detach($permission);
    }

    public function hasPermission($permission)
    {
        return $this->permissions->contains($permission);
    }



}



































