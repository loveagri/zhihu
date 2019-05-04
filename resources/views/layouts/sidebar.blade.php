<div id="sidebar" class="col-xs-12 col-sm-4 col-md-4 col-lg-4 mt-3 ">

    <div class="card mb-3" >
      <div class="card-header">
        欢迎！欢迎来到简书网站
    </div>

   <ul class="list-group list-group-flush">
    <li class="list-group-item">    <p>
        <strong><a href="/">简书网站</a></strong> 基于 Laravel5.4 构建
    </p></li>
</ul>
</div>
<div class="card" >
  <div class="card-header">
    Featured
</div>
<ul class="list-group list-group-flush">
    @foreach ($topics as $topic)
        <li class="list-group-item"><a href="/topic/{{$topic->id}}">{{$topic->name}}</a></li>
    @endforeach

</ul>
</div>


</div>
</div>
