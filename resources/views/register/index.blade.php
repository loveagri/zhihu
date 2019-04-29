@extends('layouts.LOrR')

@section('content')
    <div class="container" style="min-height: 100vh;margin-top: 10rem">
        <h2 class="text-center">注册</h2>
        <form class="w-25 mx-auto" action="/register" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">名字</label>
                <input type="text" name="name" class="form-control" placeholder="username">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label>邮箱</label>
                <input type="email" name="email" class="form-control" placeholder="email">
            </div>
            <div class="form-group">
                <label>密码</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label>确认密码</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Password">
            </div>
            @include('layouts.error')
            <button type="submit" class="btn btn-primary btn-block">注册</button>
            <a href="/login" class="btn btn-primary btn-block">去登录&gt;&gt;</a>
        </form>
    </div>
@stop
