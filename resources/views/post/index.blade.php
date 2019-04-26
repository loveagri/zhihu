@extends('layouts.main')

@section('content')
  <div class="col-sm-8 blog-main mt-3">
      @include("post.carousel")
      <div class="list-group mt-4 border-0">
          <a href="#" class="list-group-item list-group-item-action border-0">
              <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">List group item heading</h5>
                  <small>3 days ago</small>
              </div>
              <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
              <p class="blog-post-meta">赞 2  | 评论 3</p>
          </a>
          <a href="#" class="list-group-item list-group-item-action border-0">
              <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">List group item heading</h5>
                  <small class="text-muted">3 days ago</small>
              </div>
              <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
              <p class="blog-post-meta">赞 2  | 评论 3</p>
          </a>
          <a href="#" class="list-group-item list-group-item-action border-0">
              <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">List group item heading</h5>
                  <small class="text-muted">3 days ago</small>
              </div>
              <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
              <p class="blog-post-meta">赞 2  | 评论 3</p>
          </a>
      </div>
</div>
@stop
