@extends('layouts.LOrR')

@section('content')
    <div class="container" style="min-height: 89vh;margin-top: 6rem">
        <h2 class="text-center h2-text-color">Welcome to AU Forum</h2>
        <form class="w-25 mx-auto" action="/register" method="POST" id="login-form">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1" class="text-color">Nickname</label>
                <input type="text" name="name" class="form-control" placeholder="username">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label class="text-color">Email</label>
                <input type="email" name="email" class="form-control" placeholder="email">
            </div>
            <div class="form-group">
                <label class="text-color">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label class="text-color">Confirm password</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Password">
            </div>
            @include('layouts.error')
            <button type="submit" class="btn btn-primary btn-block btn-background">Sign up</button>
            <a href="/login" class="btn btn-primary btn-block btn-background">Sign in&gt;&gt;</a>
        </form>
    </div>
@stop
