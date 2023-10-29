@extends('layouts.app')
@section('title')
    News
@endsection
@section('content')

    <div class="container">
    <div class="row">
        @foreach($jsonData->hits as $blog)
            <div class="col-md-5 border mt-3  p-2  card-hover rounded news-font mx-auto">
                <a class="text-decoration-none" href="{{$blog->url}}" target="_blank">
                    <h5 class="text-white fw-bold">{{$blog->title}}</h5>
                <p class="text-secondary fw-bold text-capitalize">Author : {{$blog->author}}</p>
                </a>
            </div>
        @endforeach
    </div>

    </div>


@endsection
