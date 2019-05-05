<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUser extends Authenticatable
{
    protected $rememberTokenName = '';
    protected $guarded = [];

    public function roles()
    {
        return $this->belongsToMany(
            AdminRole::class,
            'admin_role_user',
            'user_id',
            'role_id'
        )->withPivot(['user_id','role_id']);
    }

    public function isInRoles($roles)
    {
        return !! $roles->intersect($this->roles)->count();
    }

    public function assignRole($role)
    {
        return $this->roles()->save($role);
    }

    public function deleteRole($role)
    {
        return $this->roles()->detach($role);
    }

    public function hasPermission($permission)
    {
//        dd($permission);
       return $this->isInRoles($permission->roles);
    }







}
