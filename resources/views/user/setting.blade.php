@extends('layouts.main')

@section('content')
    <div class="col-sm-8 blog-main mt-3">
        <form action="/user/me/setting" method="POST">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">用户名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">头像</label>
                <div class="col-sm-4 row align-items-center">
                    <input type="file" class="form-control-file" value="用户名" name="avatar">
                    <img src="https://randomuser.me/api/portraits/women/23.jpg" alt="" class="img-rounded mt-4" style="border-radius:500px;">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">修改</button>
        </form>
    </div>
@stop
