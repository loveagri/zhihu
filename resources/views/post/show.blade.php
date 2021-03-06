@extends('layouts.main')

@section('content')
    <div class="col-sm-8 blog-main mt-3">
        <div class="card border-0">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h2>{{$post->title}}</h2>
                    @can('update',$post)
                        <a href="/posts/{{$post->id}}/edit">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                    @endcan
                    @can('delete',$post)
                        <a href="/posts/{{$post->id}}/delete">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                    @endcan
                </div>
                <small>{{$post->created_at->toFormattedDateString()}} by <a href="/user/{{$post->user->id}}">{{$post->user->name}}</a></small>
                <p>{!! $post->content !!}</p>
                <div>
                    @if ($post->zan(\Auth::id())->exists())
                        <a href="/posts/{{$post->id}}/unzan" class="btn btn-info">unlike</a>
                    @else
                        <a href="/posts/{{$post->id}}/zan" class="btn btn-primary">like</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="card my-5">
            <div class="card-header">
                <h5 class="card-title m-0">Comment</h5>
            </div>
            <ul class="list-group list-group-flush">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <small>{{$comment->created_at->toFormattedDateString()}} by {{$comment->user->name}}</small>
                        <p>{{$comment->content}}</p>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="card my-5">
            <div class="card-header">
                <h5 class="card-title m-0">Publish</h5>
            </div>
            <div class="card-body">
                <form class="mt5" action="/posts/{{$post->id}}/comment" method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea class="form-control" name="content" rows="3"></textarea>
                    </div>
                    @include('layouts.error')
                    <button type="submit" class="btn btn-primary">Publish</button>
                </form>
            </div>
        </div>

    </div>
@stop
