@extends('layouts.app')
@section('content')

    <div class="container">
    <div class="row justify-content-center">
        @foreach($jsonData->hits as $blog)

            <div class="col-md-5 col-sm-12  border mt-3 ms-2 py-1 card-hover rounded news-font">
                <a class="text-decoration-none" href="{{$blog->url}}" target="_blank">

                <h5 class="text-white fw-bold mt-2">{{$blog->title}}</h5>
                <p class="text-secondary fw-bold text-capitalize">Author : {{$blog->author}}</p>
                </a>
            </div>
        @endforeach
    </div>

    </div>


@endsection
