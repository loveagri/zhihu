@extends('layouts.main')

@section('content')
<div class="col-sm-8 blog-main mt-3">

    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">标题</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="请输入标题">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">内容</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">提交</button>
</form>
</div>
@stop
