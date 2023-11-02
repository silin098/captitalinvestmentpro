@extends('layouts.app')
@section('title')
    Contact Us
@endsection
@section('content')

    <div class="vh-100">

                @if(Session::has('success'))
                            <div class="col-8 mx-auto text-light mt-5 text-center vh-100">
                            <h1 class="display-1 text-center"><i class="fa-solid fa-circle-check mt-5"></i></h1>
                            <h1 class="display-1">Thank you! </h1>
                            <p class="text-light">{{Session::get('success')}}</p>
                            <a href="/" class="btn btn-light">Back To Home</a>
                            </div>
                @else


                    <div class="row mt-5">


                <div class="col-md-6">
                <div class="form-container">
                <form class="form" method="POST" action="{{route('contact.store')}}">
                    @csrf
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

                    <input placeholder="Subject"  type="text" class="input" name="subject">
                    @error('message')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    <textarea placeholder="What can we help you with?" rows="5" cols="30" id="message" name="message" class="textarea"></textarea>

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

                <div class="col-md-6">
                    <div class="mt-5 pt-5">
                        <div class="display-6">Get In Touch</div>
                        <p>For general inquiries or information about our company, use the contact form .
                        </p>
                    </div>
                </div>


        @endif


    </div>
@endsection
