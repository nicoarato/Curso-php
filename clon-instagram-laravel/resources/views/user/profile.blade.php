@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="data-user">
            
                @if($user->image)
                    <div class="container-avatar">
                        <img class="avatar" src="{{ route('user.avatar',['filename' => $user->image]) }}">
                    </div>
                @endif
            
            <div class="user-info">
                <h1>{{'@' . $user->nick}}</h1>
                <h2>{{$user->name . ' ' . $user->surname}}</h2>
                <p>
                    <span class="nickname">
                        {{  ' Se unió | '. FormatTime::LongTimeFilter($user->created_at) }}
                    </span>
                </p>
                
            </div>
        </div>
        
        
        <div class="col-md-8">
            
            @foreach($user->images as $image)
                @include('includes.image', ['image' => $image])
            @endforeach

        </div>

    </div>
</div>
@endsection
