<?php

namespace App\Admin\Controllers;


class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login.index');
    }

    public function login()
    {
        $this->validate(request(), [
            'name' => 'required|min:2',
            'password' => 'required|min:5|max:10',
        ]);

        $user = request(['name','password']);

        if (\Auth::guard('admin')->attempt($user)){
            return redirect('/admin/posts');
        }

        return \Redirect::back()->withErrors('Password not match');
    }

    public function logout()
    {
        \Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
