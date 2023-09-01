@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
<main class="container">

    <div class="col-lg-7 mx-auto my-5">
        <h1 class="text-white mt-5 text-center pt-5 display-5 fw-bold">
            Unlock the Potential of Cryptocurrency
            Investment in Digital Assets and Secure Your Financial Future!
        </h1>
        <div class="text-center my-5">

        <a href="/contact" class="text-light banner-btn text-decoration-none">Get In Touch</a>

        </div>
        <div class="text-center text-light para">
            <h2  class="mb-3">Trusted WorldWide</h2>
            <p class="lead">Discover why millions of investors from over
                the countries joined <span class="my-underline">Capitalinvestmentpro</span></p>


        </div>



    </div>
    <div class="row my-5">
        <div class="col-md-3 text-center">
            <i class="fa-solid fa-thumbs-up fa-6x text-white"></i>
            <div class="my-4 text-white-50">
                <h5 class="card-title mb-2 fs-4">Trusted</h5>
                <p class="card-text lead">More than 10+ million
                    investors  globally
                </p>

            </div>

        </div>

        <div class="col-md-3 text-center">
            <i class="fa-solid fa-circle-check fa-6x text-white"></i>
            <div class="my-4 text-white-50">
                <h5 class="card-title mb-2 fs-4">Reliable</h5>
                <p class="lead">Regulated by various
                    authorities around
                    the world</p>

            </div>

        </div>

        <div class="col-md-3 text-center">
            <i class="fa-solid fa-lock fa-6x text-white"></i>
            <div class="my-4 text-white-50 ">
                <h5 class="card-title mb-2 fs-4">Secured</h5>
                <p class="card-text lead">Utilising top-tier security
                    practices</p>

            </div>

        </div>
        <div class="col-md-3 text-center">
            <i class="fa-solid fa-globe fa-6x text-white"></i>
            <div class="my-4 text-white-50 ">
                <h5 class="card-title mb-2 fs-4">Global</h5>
                <p class="card-text lead">Providing services
                    around the world</p>
            </div>

        </div>
    </div>
</main>
<hr class="text-secondary">

<section class="text-light container ">
    <div class="my-3">
    <h2 class="text-center fw-bold">How do we work?</h2>
    <p class="col-md-8 mx-auto text-center lead">We strive to create extraordinary experience, increase brand awareness, expand target audience reach and optimize overall business results</p>
    </div>
    <div class="row">
        <div class="col-md-4 my-4">
            <div class="custom-card">
                <div class="content">
                    <div class="price">Smart Digital Marketing Strategy</div>
                    <div class="description">Overall We leverage technological intelligence and understanding of customer behaviour to achieve marketing goals and more efficiently</div>
                </div>

            </div>

        </div>
        <div class="col-md-8">
            <img src="{{url('images/office.jpg')}}"  class="img-thumbnail mb-3" alt="capitialinvestmentpro_picture">
        </div>
    </div>
</section>

@endsection


