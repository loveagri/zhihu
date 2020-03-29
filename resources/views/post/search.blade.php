@extends('layouts.main')


@section('content')
    <div class="col-sm-8 blog-main mt-3">
        <div class="list-group mt-4 border-0">
            <div class="alert alert-success" role="alert">
                The posts contain "{{$query}}"，total page: {{$posts->total()}}
            </div>
            @foreach($posts as $post)
                <div class="list-group-item list-group-item-action border-0 mt-2">
                    <div>
                        <h5 class="mb-1"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
                        <small>{{$post->created_at->toFormattedDateString()}} by <a href="/user/{{$post->user->id}}">{{$post->user->name}}</a>
                        </small>
                    </div>
                    <p class="mt-2">{!! str_limit($post->content,100,'...') !!}</p>
                </div>
            @endforeach
            {{$posts->links()}}
        </div>
    </div>
@stop
