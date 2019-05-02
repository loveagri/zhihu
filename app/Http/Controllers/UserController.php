<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function setting()
    {
        $me = \Auth::user();
        return view('user.setting', compact('me'));
    }

    public function settingStore(Request $request, User $user)
    {
        $this->validate(request(), [
            'name' => 'min:3',
        ]);

        $name = request('name');
        if ($name != $user->name) {
            if (\App\User::where('name', $name)->count() > 0) {
                return back()->withErrors(array('message' => '用户名称已经被注册'));
            }
            $user->name = request('name');
        }
        if ($request->file('avatar')) {
            $path = $request->file('avatar')->storePublicly(md5(\Auth::id() . time()));
            $user->avatar = "/storage/" . $path;
        }

    }

    public function show()
    {
        return view('user.show');
    }


    public function fan()
    {
        
    }

    public function unfan()
    {
        
    }
}
