@extends('layouts.LOrR')

@section('content')
    <div class="container" style="min-height: 100%;margin-top: 7rem">
        <h2 class="text-center">Welcome to AU Forum</h2>
        <form class="w-75 mx-auto" action="/login" method="POST" id="login-form">
            @csrf
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="email"  aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" value="1" name="is_remember" id="check-me-out">
                <label class="form-check-label" for="check-me-out">Check me out</label>
            </div>
            @include('layouts.error')
            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
            <a href="/register" class="btn btn-primary btn-block">Sign up&gt;&gt;</a>
        </form>
    </div>
@stop
