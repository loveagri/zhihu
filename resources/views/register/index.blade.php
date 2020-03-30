@extends('layouts.LOrR')

@section('content')
    <div class="container" style="min-height: 100vh;margin-top: 10rem">
        <h2 class="text-center">Sign up</h2>
        <form class="w-25 mx-auto" action="/register" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nickname</label>
                <input type="text" name="name" class="form-control" placeholder="username">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label>Confirm password</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Password">
            </div>
            @include('layouts.error')
            <button type="submit" class="btn btn-primary btn-block">Sign up</button>
            <a href="/login" class="btn btn-primary btn-block">Sign in&gt;&gt;</a>
        </form>
    </div>
@stop
