@extends('layouts.main')

@section('content')
    <div class="col-sm-8 blog-main mt-3">
        <blockquote class=blockquote-float">
            <p>{{$topic->name}}</p>
            <footer>Posts：{{$topic->post_topics_count}}</footer>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary contribute-btn" topic-id="{{$topic->id}}" data-toggle="modal"
                    data-target="#topic_submit_modal">
                Contribute
            </button>
        </blockquote>
        <!-- Modal -->
        <div class="modal fade" data-backdrop="static" id="topic_submit_modal" tabindex="-1" role="dialog" aria-labelledby="topic_submit_modalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Post lists</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/topic/{{$topic->id}}/submit" method="POST">
                        <div class="modal-body">
                            @csrf
                            @foreach ($myposts as $post)
                                <div class="form-check">
                                    <input class="form-check-input" name="post_ids[]" type="checkbox" value="{{$post->id}}"
                                           id="defaultCheck{{$post->id}}">
                                    <label class="form-check-label" for="defaultCheck{{$post->id}}">
                                        {{$post->title}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Contribute</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                   aria-selected="true">Posts</a>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="list-group">
                    @foreach($posts as $post)
                        <div class="list-group-item list-group-item-action border-0 mt-2">
                            <div class="d-flex w-100 justify-content-between">
                                <a href="/posts/{{$post->id}}" class="text-primary"><h5
                                        class="mb-1 text-primary">{{$post->title}}</h5></a>
                                <small class="text-muted">{{$post->created_at->diffForHumans()}}
                                    by {{$post->user->name}}</small>
                            </div>
                            <p class="mb-1">{!! str_limit($post->content,100,'...') !!}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


@stop
