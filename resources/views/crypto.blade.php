@extends('layouts.app')
@section('content')


    <div class="row justify-content-center">
        @foreach($jsonData->hits as $blog)

            <div class="col-md-5 col-12 border mt-3 me-3 py-1 card-hover rounded news-font">
                <a class="text-decoration-none" href="{{$blog->url}}" target="_blank">
{{--                <p class="text-secondary fw-bold">Updated: Sep 27, 2022 </p>--}}
                <h5 class="text-white fw-bold mt-2">{{$blog->title}}</h5>
                <p class="text-secondary fw-bold text-capitalize">Author : {{$blog->author}}</p>
                </a>
            </div>
        @endforeach


    </div>


@endsection
