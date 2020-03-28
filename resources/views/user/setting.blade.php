@extends('layouts.main')

@section('content')
    <div class="col-sm-8 blog-main mt-3">
        <form  action="/user/{{Auth::id()}}/setting" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{$me->name}}" placeholder="nickname">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">profile photo</label>
                <div class="col-sm-4 row align-items-center">
                    <input type="file" class="form-control-file" value="username" name="avatar">
                    <img class="preview_img"  src="{{$me->avatar}}" alt="" class="img-rounded mt-4" style="border-radius:500px;">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@stop
