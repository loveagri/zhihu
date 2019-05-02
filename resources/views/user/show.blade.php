@extends('layouts.main')

@section('content')
    <div class="col-sm-8 blog-main mt-3">
        <blockquote>
            <p>
                <img src="{{$user->avatar}}" alt="" class="img-rounded"
                     style="border-radius:500px; height: 40px"> {{$user->name}}
            </p>
            <footer>关注：{{$user->stars_count}}｜粉丝：{{$user->fans_count}}｜文章：{{$user->posts_count}}</footer>
            @include('user.badges.like', ['target_user' => $user])
        </blockquote>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                   aria-selected="true">文章</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                   aria-controls="profile" aria-selected="false">关注</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                   aria-controls="contact" aria-selected="false">粉丝</a>
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
                                <small class="text-muted">{{$post->created_at->diffForHumans()}}</small>
                            </div>
                            <p class="mb-1">{!! str_limit($post->content,100,'...') !!}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="list-group">
                    @foreach($susers as $user)
                        <div class="list-group-item list-group-item-action border-0 mt-2">
                            <div class="d-flex w-100 justify-content-between">
                                <a href="/user/{{$user->id}}" class="text-primary"><h5
                                        class="mb-1 text-primary">{{$user->name}}</h5></a>
                            </div>
                            <footer>关注：{{$user->stars_count}}｜粉丝：{{$user->fans_count}}
                                ｜文章：{{$user->posts_count}}</footer>
                            @include('user.badges.like', ['target_user' => $user])
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="list-group">
                    @foreach($fusers as $user)
                        <div class="list-group-item list-group-item-action border-0 mt-2">
                            <div class="d-flex w-100 justify-content-between">
                                <a href="/user/{{$user->id}}" class="text-primary"><h5
                                        class="mb-1 text-primary">{{$user->name}}</h5></a>
                            </div>
                            <footer>关注：{{$user->stars_count}}｜粉丝：{{$user->fans_count}}
                                ｜文章：{{$user->posts_count}}</footer>
                            @include('user.badges.like', ['target_user' => $user])
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop
