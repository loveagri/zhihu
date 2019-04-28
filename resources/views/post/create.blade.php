@extends('layouts.main')

@section('content')
    <div class="col-sm-8 blog-main mt-3">
        <form action="/posts" method="POST">
            @csrf
            <div class="form-group">
                <label>标题</label>
                <input type="text" class="form-control" name="title" placeholder="请输入标题">
            </div>
            <div class="form-group">
                <label>内容</label>
                <div id="editor"></div>
                <textarea name="content" hidden id="content" style="height:400px;max-height:500px;" name="content"
                          class="form-control"></textarea>
            </div>
            @include('layouts.error');
            <button type="submit" class="btn btn-primary">提交</button>
        </form>
    </div>
@stop
