@extends('layouts.app')
@section('title')
    Contact Us
@endsection
@section('content')
    <div class="container">
    @if(Session::has('success'))
            <div class="col-8 mx-auto text-light mt-5 vh-100 text-center">
            <h1 class="display-1 text-center"><i class="fa-solid fa-circle-check mt-5"></i></h1>
            <h1 class="display-1">Thank you! </h1>
            <p class="text-light">{{Session::get('success')}}</p>
            <a href="/" class="btn btn-light">Back To Home</a>
            </div>

        @else
            <div class="col-md-8 mx-auto text-light vh-100 mt-5">

            <form method="POST" action="{{route('contact.store')}}">
            @csrf
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Enter Your Name" name="name" >
               @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control form-control-lg" id="exampleFormControlInput1" name="email" placeholder="Enter Your Email" >
            @error('email')
                    <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
            <input type="text" class="form-control form-control-lg" name="phone" id="exampleFormControlInput1" placeholder="Enter Your Phone Number" >
            @error('phone')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Subject</label>
                <input type="text" class="form-control form-control-lg" name="subject" id="exampleFormControlInput1" placeholder="Subject" >
                @error('subject')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
            <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="7" name="message" ></textarea>
            @error('message')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
                <div class="my-3">
                    {!! NoCaptcha::display() !!}
                    @error('g-recaptcha-response')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

            <button type="submit" class="btn btn-outline-light btn-lg"><i class="fa-solid fa-paper-plane"></i> Send Us </button>
            </form>
            </div>



        @endif

    </div>

@endsection
