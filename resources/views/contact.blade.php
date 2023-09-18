@extends('layouts.app')
@section('title')
    Contact Us
@endsection
@section('content')

    <section  class="vh-100 p-3">
        <div class="col-md-4 mt-5 mx-auto">
        <form class="form">
            <div class="title">Contact Us</div>
            <input class="custom-input" name="email" placeholder="Name" type="text">
            <input class="custom-input" name="email" placeholder="Email" type="email">
            <input class="custom-input" name="phone" placeholder="Phone Number" type="number">
            <input class="custom-input" name="email" placeholder="Subject" type="text">
            <textarea class="custom-textarea" name="message" placeholder="Message...." rows="10"></textarea>
            <div>
                                    {!! NoCaptcha::display() !!}
                                    @error('g-recaptcha-response')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror

            </div>
            <button class="button-confirm">Send →</button>
        </form>
        </div>
    </section>

{{--        <h3 class="section-header">Contact</h3>--}}

{{--        <div class="contact-wrapper">--}}

            <!-- Left contact page -->

{{--            <form id="contact-form" class="form-horizontal" role="form">--}}

{{--                <div class="form-group mb-3">--}}
{{--                    <div class="col-sm-12">--}}
{{--                        <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="form-group mb-3">--}}
{{--                    <div class="col-sm-12">--}}
{{--                        <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <textarea class="form-control mb-3" rows="10" placeholder="MESSAGE" name="message" required></textarea>--}}

{{--                <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">--}}
{{--                    <div class="alt-send-button">--}}
{{--                        <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>--}}
{{--                    </div>--}}

{{--                </button>--}}

{{--            </form>--}}

            <!-- Left contact page -->

{{--            <div class="direct-contact-container">--}}

{{--                <ul class="contact-list">--}}
{{--                    <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">City, State</span></i></li>--}}

{{--                    <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">(212) 555-2368</a></span></i></li>--}}

{{--                    <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">info@capitalinvestmentpro.com</a></span></i></li>--}}

{{--                </ul>--}}

{{--                <hr>--}}
{{--                <ul class="social-media-list">--}}
{{--                    <li><a href="#" target="_blank" class="contact-icon">--}}
{{--                            <i class="fa fa-github" aria-hidden="true"></i></a>--}}
{{--                    </li>--}}
{{--                    <li><a href="#" target="_blank" class="contact-icon">--}}
{{--                            <i class="fa fa-codepen" aria-hidden="true"></i></a>--}}
{{--                    </li>--}}
{{--                    <li><a href="#" target="_blank" class="contact-icon">--}}
{{--                            <i class="fa fa-twitter" aria-hidden="true"></i></a>--}}
{{--                    </li>--}}
{{--                    <li><a href="#" target="_blank" class="contact-icon">--}}
{{--                            <i class="fa fa-instagram" aria-hidden="true"></i></a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <hr>--}}

{{--                <div class="copyright">&copy; ALL OF THE RIGHTS RESERVED</div>--}}

{{--            </div>--}}

        </div>

    </section>


    {{--    <div class="container">--}}
{{--    @if(Session::has('success'))--}}
{{--            <div class="col-8 mx-auto text-light mt-5 vh-100 text-center">--}}
{{--            <h1 class="display-1 text-center"><i class="fa-solid fa-circle-check mt-5"></i></h1>--}}
{{--            <h1 class="display-1">Thank you! </h1>--}}
{{--            <p class="text-light">{{Session::get('success')}}</p>--}}
{{--            <a href="/" class="btn btn-light">Back To Home</a>--}}
{{--            </div>--}}

{{--        @else--}}
{{--            <div class="col-sm-12 col-md-8 mx-auto text-light  mt-5">--}}

{{--            <form method="POST" action="{{route('contact.store')}}">--}}
{{--            @csrf--}}
{{--            <div class="mb-3">--}}
{{--            <label for="exampleFormControlInput1" class="form-label">Name</label>--}}
{{--            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Enter Your Name" name="name" >--}}
{{--               @error('name')--}}
{{--                    <span class="text-danger">{{$message}}</span>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <div class="mb-3">--}}
{{--            <label for="exampleFormControlInput1" class="form-label">Email</label>--}}
{{--            <input type="email" class="form-control form-control-lg" id="exampleFormControlInput1" name="email" placeholder="Enter Your Email" >--}}
{{--            @error('email')--}}
{{--                    <span class="text-danger">{{$message}}</span>--}}
{{--            @enderror--}}
{{--            </div>--}}
{{--            <div class="mb-3">--}}
{{--            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>--}}
{{--            <input type="text" class="form-control form-control-lg" name="phone" id="exampleFormControlInput1" placeholder="Enter Your Phone Number" >--}}
{{--            @error('phone')--}}
{{--            <span class="text-danger">{{$message}}</span>--}}
{{--            @enderror--}}
{{--            </div>--}}
{{--            <div class="mb-3">--}}
{{--                <label for="exampleFormControlInput1" class="form-label">Subject</label>--}}
{{--                <input type="text" class="form-control form-control-lg" name="subject" id="exampleFormControlInput1" placeholder="Subject" >--}}
{{--                @error('subject')--}}
{{--                <span class="text-danger">{{$message}}</span>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <div class="mb-3">--}}
{{--            <label for="exampleFormControlTextarea1" class="form-label">Message</label>--}}
{{--            <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="7" name="message" ></textarea>--}}
{{--            @error('message')--}}
{{--            <span class="text-danger">{{$message}}</span>--}}
{{--            @enderror--}}
{{--            </div>--}}

{{--                <div class="mb-3">--}}
{{--                    {!! NoCaptcha::display() !!}--}}
{{--                    @error('g-recaptcha-response')--}}
{{--                    <span class="text-danger">{{$message}}</span>--}}
{{--                    @enderror--}}

{{--                </div>--}}

{{--            <button type="submit" class="btn btn-outline-light btn-lg"><i class="fa-solid fa-paper-plane"></i> Send Us </button>--}}
{{--            </form>--}}
{{--            </div>--}}



{{--        @endif--}}

{{--    </div>--}}

@endsection
