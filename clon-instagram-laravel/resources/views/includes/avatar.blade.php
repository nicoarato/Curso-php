@if (Auth::user()->image)
    <!-- <img src="{{ url('/user/avatar/'.Auth::user()->image) }}">-->

        <img class="avatar" src="{{ route('user.avatar',['filename' => Auth::user()->image]) }}">

@endif