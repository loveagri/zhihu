<?php

namespace App\Admin\Controllers;


use App\AdminPermission;
use App\AdminUser;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = AdminPermission::paginate();
        return view('admin.permission.index',compact('permissions'));
    }

    public function create()
    {
        return view('admin.permission.add');
    }

    public function store()
    {
        $this->validate(request(), [
            'name'=>'required|min:3',
            'description'=>'required'
        ]);

        AdminPermission::create(request(['name','description']));

        return redirect('/admin/permissions');
    }
}
