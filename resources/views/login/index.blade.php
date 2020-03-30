@extends('layouts.LOrR')

@section('content')
    <div class="container" style="min-height: 89vh;margin-top: 6rem">
        <h2 class="text-center h2-text-color">Welcome to AU Forum</h2>
        <form class="w-75 mx-auto" action="/login" method="POST" id="login-form">
            @csrf
            <div class="form-group">
                <label class="text-color">Email</label>
                <input type="email" class="form-control" name="email"  aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label class="text-color">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" value="1" name="is_remember" id="check-me-out">
                <label class="form-check-label text-color" for="check-me-out">Check me out</label>
            </div>
            @include('layouts.error')
            <button type="submit" class="btn btn-primary btn-block btn-background">Sign in</button>
            <a href="/register" class="btn btn-primary btn-block btn-background">Sign up&gt;&gt;</a>
        </form>
    </div>
@stop
