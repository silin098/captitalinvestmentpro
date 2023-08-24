@extends('layouts.app')
@section('content')

    <div class="">

    <div class="row justify-content-center">
        @foreach($jsonData->hits as $blog)


        <div class="col-md-5 col-sm-12 border mt-3 me-3 py-1 card-hover">
            <a class="text-decoration-none" href="{{$blog->url}}" target="_blank">
                <p class="text-secondary fw-bold">Updated: Sep 27, 2022 </p>
                <h5 class="text-white fw-bold">{{$blog->title}}</h5>
                <p class="text-secondary fw-bold text-capitalize">Author:{{$blog->author}}</p>

            </a>
        </div>
        @endforeach


    </div>
    </div>

@endsection
