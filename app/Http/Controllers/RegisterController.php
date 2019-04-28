<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function register()
    {
        $this->validate(request(), [
            'name' => 'required|min:3|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|max:10|confirmed',
        ]);

        $name = request('name');
        $email = request('email');
        $password = bcrypt(request('password'));

        $user = User::create(compact('name', 'email', 'password'));

        return redirect('/login');
    }
}
