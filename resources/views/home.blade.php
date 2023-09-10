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

<section class="text-light container">
    <div class="my-3">
    <h2 class="text-center fw-bold">How do we work?</h2>
    <p class="col-md-8  text-center lead mx-auto">We strive to create extraordinary experience, increase brand awareness, expand target audience reach and optimize overall business results</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4 d-flex justify-content-center">
            <div class="custom-card">
                <div class="content">
                    <div class="price">Smart Digital Marketing Strategy</div>
                    <div class="description">Overall We leverage technological intelligence and understanding of customer behaviour to achieve marketing goals and more efficiently</div>
                </div>

            </div>

        </div>
        <div class="col-md-8 mx-auto">
            <img src="{{url('images/office.jpg')}}"  class="img-thumbnail mb-3" alt="capitialinvestmentpro_picture">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 d-flex justify-content-center">
            <div class="custom-card">
                <div class="content">
                    <div class="price">Best Web and App Developers</div>
                    <div class="description">We are able to create great user experiences, intuitive interface and have ability to integrate advanced features to add significant value</div>
                </div>

            </div>

        </div>
        <div class="col-md-4 d-flex justify-content-center">
            <div class="custom-card">
                <div class="content">
                    <div class="price">Visualization of user-appealing designs</div>
                    <div class="description">A user-appealing design can create a mesmerizing experience and motivate users to continue using and interacting with the product</div>
                </div>

            </div>

        </div>
        <div class="col-md-4 d-flex justify-content-center">
            <div class="custom-card">
                <div class="content">
                    <div class="price">Quick and friendly service</div>
                    <div class="description">Quick and friendly service also includes the ability to respond and handle complaints or problems quickly. ensuring customers feel valued</div>
                </div>
            </div>
        </div>
    </div>

</section>
<hr class="text-secondary">
    <section class="container text-white">
        <h4 class="text-center fw-bold my-3 lead">Working Environment At Capital Investment Pro</h4>
        <div class="row">
            <div class="col-md-4">
                <img src="{{url('/images/office_photo.jpg')}}" class="img-thumbnail working-img">
                <p class="text-center">Working Office</p>
            </div>
            <div class="col-md-4">
                <img src="{{url('/images/rest.jpg')}}" class="img-thumbnail">
                <p class="text-center">Rest Room </p>
            </div>
            <div class="col-md-4">
                <img src="{{url('/images/conference.jpg')}}" class="img-thumbnail">
                <p class="text-center">Conference Room</p>
            </div>
        </div>
    </section>
<hr class="text-secondary">
<section class="container text-white">
    <h4 class="text-center fw-bold my-4 lead">Accommodation provided by company  for employee</h4>
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{url('/images/bedroom.jpg')}}" class="card-img working-img">
            <div class="card-img-overlay">
                <div class="d-flex  align-items-end justify-content-end " style="height: 100%">
                    <p class="card-text text-light lead">Employee Rooms</p>
                </div>

            </div>

            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{url('/images/bed1.jpg')}}" class="card-img">
            <div class="card-img-overlay">
                <div class="d-flex  align-items-end justify-content-end" style="height: 100%">
                    <p class="card-text text-light lead">VIP Rooms</p>
                </div>


            </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{url('/images/manager_room.jpg')}}" class="card-img">
                <div class="card-img-overlay">
                    <div class="d-flex  align-items-end" style="height: 100%">
                        <p class="card-text text-light lead">Managerial Room</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>


@endsection


