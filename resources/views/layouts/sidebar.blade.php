<div id="sidebar" class="col-xs-12 col-sm-4 col-md-4 col-lg-4 mt-3 ">

    <div class="card mb-3">
        <div class="card-header">
            Welcome to Assumption University
        </div>

        <ul class="list-group list-group-flush">
            <li class="list-group-item"><p>
                    {{--        <strong><a href="/">静思田园</a></strong> --}}
                    AU Forum, A platform that conveys infinite charm
                </p></li>
        </ul>
    </div>
    <div class="card">
        <div class="card-header">
            Topics
        </div>
        <ul class="list-group list-group-flush">
            @foreach ($topics as $topic)
                <li class="list-group-item"><a href="/topic/{{$topic->id}}">{{$topic->name}}</a></li>
            @endforeach

        </ul>
    </div>
</div>

