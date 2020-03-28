@extends('layouts.main')

@section('content')

    <div class="col-sm-8 blog-main mt-3">
        <div class="list-group mt-4 border-0">
            @foreach($notices as $notice)
                <div class="list-group-item list-group-item-action border-0 mt-2">
                    <div>
                        <h5 class="mb-1"><span href="#">{{$notice->title}}</span></h5>
                        <small>{{$notice->created_at->toFormattedDateString()}} </small>
                    </div>
                    <p class="mt-2">{!! str_limit($notice->content,100,'...') !!}</p>
                </div>
            @endforeach
        </div>
    </div>
@stop
