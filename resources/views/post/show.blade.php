@extends('layouts.main')

@section('content')
<div class="col-sm-8 blog-main mt-3">
    <div class="card border-0">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h2 >{{$post->title}}</h2>
                <a  href="/posts/{{$post->id}}/edit">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>
                <a  href="/posts/{{$post->id}}/delete">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
             <small>{{$post->created_at->toFormattedDateString()}} by <a href="" >loveagri</a></small>
            <p>{{$post->content}}</p>
            <div>
                <a href="/posts/{{$post->id}}/zan" class="btn btn-primary">赞</a>
            </div>
        </div>
    </div>
    <div class="card my-5">
      <div class="card-header">
        <h5 class="card-title m-0">评论</h5>
    </div>
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Vestibulum at eros</li>
    </ul>
</div>
<div class="card my-5">
  <div class="card-header">
    <h5 class="card-title m-0">发表评论</h5>
</div>
<div class="card-body">
    <form class="mt5">
      <div class="form-group">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">发表评论</button>
</form>
</div>
</div>

</div>
@stop
