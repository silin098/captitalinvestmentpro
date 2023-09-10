@extends('layouts.app')
@section('title')
    About Us
@endsection
@section('content')
    <div class="col-md-8 mx-auto my-5">
        <h1 class="lh-md text-center fw-bold">
           About Us
        </h1>
            <div class="col-md-8 mx-auto">
                <p class="text-light lead text-center fw-lighter">
                    Capital Investment Pro, a partner of Asia’s top financial group, is currently one of the few overseas financial operating companies. From 2019 to 2020, it won unanimous praise in the industry and a number of technical patents, and completed the top ten outstanding performance indicators in Asia
                </p>
            </div>


    </div>
    <div class="container">


        <div class="row justify-content-center align-items-center">
            <div class="col-md-5 my-5">
               <h3 class="text-light text-center">Our Mission</h3>
                <p class="text-light lead text-center">Bringing Blockchain Technology to use & work for various Industry Domains and the General Public. We do this by engaging in Customer projects as a service provider and also by building our own products within a startup context.</p>
            </div>
            <div class="col-md-7">
                <img src="{{url('images/bitcoin-cryptocurrency.gif')}}" alt="blockchain">
            </div>



            <div class="col-md-4 col-12">

            </div>
        </div>

        </div>


@endsection
