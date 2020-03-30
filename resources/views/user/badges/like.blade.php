@if($target_user->id != \Auth::id())
    <div>
        @if($target_user->hasFan(\Auth::id()))
            <button class="btn btn-success like-button" like-value="1" like-user="{{$target_user->id}}" _token="{{csrf_token()}}" type="button">Unfollow</button>
        @else
            <button class="btn btn-primary like-button" like-value="0" like-user="{{$target_user->id}}" _token="{{csrf_token()}}" type="button">Follow</button>
        @endif
    </div>
@endif

