@extends('layouts.main')

@section('content')
    <div class="col-sm-8 blog-main mt-3">

        <form action="/posts/{{$post->id}}" method="POST">
            {{method_field('PUT')}}
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">标题</label>
                <input type="text" class="form-control" name="title" value="{{$post->title}}" placeholder="请输入标题">
            </div>
            <div class="form-group">
                <label>内容</label>
                <div id="editor"></div>
                <textarea name="content" hidden id="content" style="height:400px;max-height:500px;" name="content"
                          class="form-control">
                {!! $post->content !!}
            </textarea>
            </div>
            @include('layouts.error')
            <button type="submit" class="btn btn-primary">提交</button>
        </form>
    </div>
@stop
