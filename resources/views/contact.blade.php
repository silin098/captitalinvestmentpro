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
            <a href="/" class="btn btn-outline-primary">Back To Home</a>
        </div>
        @else


    <div class="row mt-5">

                        <div class="col-md-6">
                            <div class="display-6">Get In Touch</div>
                            <p class="d-none d-sm-block">For general inquiries or information about our company, use the contact form .</p>
                            <div class="d-none d-sm-block">
                                <img src="{{asset('/images/contact-us.jpg')}}" class="custom-contact-image">
                            </div>



                        </div>
        <div class="col-md-6 mt-md-5 my-2">
            <form class="border p-4" method="POST" action="{{route('contact.store')}}">
                @csrf
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="mb-3">
                    <input placeholder="Name" type="text" class="form-control" name="name">
                </div>
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="mb-3">
                    <input placeholder="Email" id="mail" type="email" class="form-control" name="email">
                </div>
                @error('phone')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="mb-3">

                    <input placeholder="Phone" id="mail" type="number" class="form-control" name="phone">
                </div>
                @error('subject')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="mb-3">

                    <input placeholder="Subject"  type="text" class="form-control" name="subject">
                </div>
                @error('message')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="mb-3">

                    <textarea placeholder="What can we help you with?" rows="3" name="message" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    {!! NoCaptcha::display() !!}
                    @error('g-recaptcha-response')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <button class="btn btn-outline-primary rounded" type="submit" >Submit</button>

            </form>
        </div>
    </div>
        @endif
    </div>






@endsection
