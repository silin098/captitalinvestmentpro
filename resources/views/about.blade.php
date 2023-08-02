@extends('layouts.app')
@section('title')
    About Us
@endsection
@section('content')
    <div class="ms-3">
    <div class="col-md-6 ms-5 mt-5">
        <h1 class="lh-md">
            Everything you need to know about digital currency trading investment
        </h1>
        <div class="col-8 my-5">
            <p class="text-light lead">
            Our digital agency helps clients develop, and implement successful digital currency investment.
            Also work with you to build your business grow
            </p>
        </div>
    </div>
        <div class="row ms-5">
            <div class="col-md-4">
                <img src="{{url('images/capitalinvestmentpro_picture_1.jpg')}}" class="img-fluid"  alt="capitialinvestmentpro_picture">
            </div>
            <div class="col-md-4 justify-content-center">
                <img src="{{url('images/capitalinvestmentpro_picture_2.jpg')}}" height="700px"  alt="capitalinvestmentpro_picture_2">
                <div class="row mt-4 text-secondary">
                    <h3>
                        What we believe in
                        Over the years at CaptialInvestmentPro, we've put a lot of thought into what is it what makes us who we are.
                    </h3>
                    <div class="d-flex ">
                        <a href="{{route('contact')}}" class="button text-decoration-none">
                            Contact Us
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <img src="{{url('images/p3.jpg')}}" height="860px" alt="capitialinvestmentpro_picture">
            </div>

        </div>
    </div>

@endsection
