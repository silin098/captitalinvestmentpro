@extends('layouts.app')
@section('title')
    About Us
@endsection
@section('content')
    <div class="">
    <div class="col-md-8 mx-auto my-5">
        <h1 class="lh-md text-center fw-bold">
           About Us
        </h1>
            <div class="col-md-10 mx-auto">
                <p class="text-center fw-lighter">
                    As an affiliate of Asia's leading financial conglomerate, Capital Investment Pro distinguishes itself as one of the select few overseas financial operating firms.
                </p>
            </div>

    </div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 d-flex justify-content-md-end justify-content-center mb-5">
                <img src="{{url('images/about-us.jpg')}}" alt="blockchain" class="my-custom-about-image">
            </div>
            <div class="col-md-6">

                <p class="lh-lg">Utilizing Blockchain Technology Across Multiple Industry Sectors and for the Wider Public. We achieve this by participating in customer initiatives as a service provider and concurrently developing our proprietary products through a startup framework</p>
                <p class="lh-lg">
                    During the period spanning 2019 to 2020, it garnered widespread acclaim within the industry, secured numerous technical patents, and secured a coveted spot among the top ten outstanding performers in the Asian market.
                </p>
                <a href="{{route('contact')}}" class="btn btn-outline-primary">Get In Touch</a>
            </div>
        </div>
        <div>
            <h1 class="text-center fw-bold">Why Choose Us</h1>
            <p class="text-center">Choosing us means partnering with a trusted, experienced, and client-focused team that is dedicated to helping you navigate the exciting and dynamic world of cryptocurrency investments.</p>
            <div class="row mt-5">
                <div class="col-md-6 mb-3">
                    <div class="card-for-about p-4 rounded-4 shadow">
                        <h5>Proven Track Record</h5>
                        <p class="lh-lg">We have a track record of successful cryptocurrency investments. Our team of experts has a deep understanding of the market, enabling us to make informed decisions and generate significant returns for our clients.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card-for-about p-4 rounded-4 shadow">
                        <h5>Diversified Portfolio</h5>
                        <p class="text-secondary lh-lg">We believe in spreading risk. Our investment strategies include a diversified portfolio of cryptocurrencies to ensure stability and mitigate potential losses</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card-for-about p-4 rounded-4 shadow">
                        <h5>Expert Team</h5>
                        <p class="text-secondary lh-lg">Our team consists of cryptocurrency professionals with years of experience in the field. We stay up-to-date with the latest market trends and technologies to provide you with the best investment opportunities.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card-for-about p-4 rounded-4 shadow">
                        <h5>Transparency</h5>
                        <p class="text-secondary lh-lg">We prioritize transparency in everything we do. You'll have access to real-time reports and updates on your investments, so you're always informed about your portfolio's performance.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card-for-about p-4 rounded-4 shadow">
                        <h5>Risk Management</h5>
                        <p class="text-secondary lh-lg">Cryptocurrency markets can be volatile. We employ robust risk management strategies to protect your investments and minimize exposure to market fluctuations</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card-for-about p-4 rounded-4 shadow">
                        <h5>Client-Centric Approach</h5>
                        <p class="text-secondary lh-lg">We prioritize transparency in everything we do. You'll have access to real-time reports and updates on your investments, so you're always informed about your portfolio's performance.</p>

                    </div>
                </div>

            </div>
        </div>
        <div class="my-5 text-light text-center">
            <h1 class="display-3">That's all about us feel free to say Hi</h1>
            <p>We're thrilled about the chance to delve deeper into your business and discover ways to assist you in reaching your digital aspirations</p>
            <a href="{{route('contact')}}" class="btn btn-outline-primary">Get In Touch</a>
        </div>

    </div>
    </div>


@endsection
