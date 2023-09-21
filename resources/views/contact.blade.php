@extends('layouts.app')
@section('title')
    Contact Us
@endsection
@section('content')

    <div  class="container vh-100  my-5">

                @if(Session::has('success'))
                            <div class="col-8 mx-auto text-light mt-5 text-center">
                            <h1 class="display-1 text-center"><i class="fa-solid fa-circle-check mt-5"></i></h1>
                            <h1 class="display-1">Thank you! </h1>
                            <p class="text-light">{{Session::get('success')}}</p>
                            <a href="/" class="btn btn-light">Back To Home</a>
                            </div>
                @else
            <div class="col-md-7 text-light mx-auto">
            <div class="form-container">
                <form class="form" method="POST" action="{{route('contact.store')}}">
                    @csrf
                    <span class="heading">Get in touch</span>
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    <input placeholder="Name" type="text" class="input" name="name">
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    <input placeholder="Email" id="mail" type="email" class="input" name="email">
                    @error('phone')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    <input placeholder="Phone Number" id="phone" type="number" class="input" name="phone">
                    <input placeholder="Subject"  type="text" class="input" name="subject">
                    @error('message')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    <textarea placeholder="Say Hello" rows="10" cols="30" id="message" name="message" class="textarea"></textarea>

                    <div class="mb-3">
                        {!! NoCaptcha::display() !!}
                        @error('g-recaptcha-response')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                    </div>
                    <div class="button-container">
                        <input class="send-button" type="submit" value="Send">

                    </div>
                </form>
            </div>
            </div>
        @endif
    </div>


@endsection
