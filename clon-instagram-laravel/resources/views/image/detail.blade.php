@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @include('includes.message')
            
            <div class="card pub_image pub_image_detail">
                <div class="card-header">
                    @if($image->user->image)
                    <div class="container-avatar">
                        <img class="avatar" src="{{ route('user.avatar',['filename' => $image->user->image]) }}">
                    </div>
                    @endif

                    <div class="data-user">
                        {{$image->user->name.' '.$image->user->surname}}
                        <span class="nickname">
                            {{  ' | @'.$image->user->nick }}
                        </span>
                    </div>
                </div>

                <div class="card-body">
                    <div class="image-container">
                        <img src="{{ route('image.file', ['filename' => $image->image_path]) }}">
                    </div>
                    
                    <div class="description">
                        <span class="nickname">
                            {{'@'. $image->user->nick}}
                        </span>
                        <span class="nickname">
                            {{  ' | '. FormatTime::LongTimeFilter($image->created_at) }}
                        </span>
                        <p> {{$image->description}}</p>
                    </div>
                    
                    <div class="likes">
                        <img src="{{ asset('img/heart-gris.png')}}">
                    </div>
                    <div class="clearfix"></div>
                    
                    <div class="comments">
                        <h2>
                            Comentarios ({{count($image->comments)}})
                        </h2>
                        <hr>
                        <form method="POST" action="{{ route('comment.save') }}">
                            @csrf

                            <input type="hidden" name="image_id" value='{{$image->id}}'>
                            <textarea class="form-control {{ $errors->has('content') ? 'is-invalid' : ''}} " name="content" required></textarea>
                            @if($errors->has('content'))
                            <span class="invalid-feedback alert-danger" role="alert">
                                <strong> {{ $errors->first('content') }}</strong>
                            </span>
                            @endif
                            <button type="submit" class="btn btn-success">
                                Enviar
                            </button>
                        </form>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
@endsection
