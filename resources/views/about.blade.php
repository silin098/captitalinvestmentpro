@extends('layouts.app')
@section('title')
    About Us
@endsection
@section('content')
    <div class="vh-100">
    <div class="col-md-8 mx-auto my-5">
        <h1 class="lh-md text-center fw-bold">
           About Us
        </h1>
            <div class="col-md-9 mx-auto">
                <p class="text-light lead text-center fw-lighter">
                    As an affiliate of Asia's leading financial conglomerate, Capital Investment Pro distinguishes itself as one of the select few overseas financial operating firms. Its impressive track record from 2019 to 2020 earned accolades within the industry, along with several valuable technical patents, and placed it prominently within the top ten outstanding performance indicators in the Asian financial landscape.
                </p>
            </div>

    </div>
    <div class="container">
        <div class="row justify-content-end align-items-center">
            <div class="col-md-6 my-5">
               <h3 class="text-light text-center">Our Mission</h3>
                <p class="text-light lead text-center">Utilizing Blockchain Technology Across Multiple Industry Sectors and for the Wider Public. We achieve this by participating in customer initiatives as a service provider and concurrently developing our proprietary products through a startup framework.</p>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
                <div class="card" style="width: 25rem;">
                    <img src="{{url('images/about-photo.jpg')}}" alt="blockchain">
                </div>
            </div>


        </div>
        <ul class="list text-light">
            <li>Throughout our journey at captialinvestmentpro, we've dedicated significant contemplation to identify the core principles that define our identity.</li>
            <li>Throughout our journey at captialinvestmentpro, we've dedicated significant contemplation to identify the core principles that define our identity.</li>
        </ul>
        <p class="text-light lead">

        </p>
        <p class="text-light lead">
            2. Over time, captialinvestmentpro has delved deep into discerning the fundamental values that shape our character.
        </p>
        <p class="text-light lead">
            3. Our extensive experience at captialinvestmentpro has led us to introspect on the underlying beliefs that constitute our essence.
        </p>
        <p class="text-light lead">
           4. At captialinvestmentpro, we've committed substantial reflection to unveil the guiding principles that define us.
        </p>

    </div>
    </div>


@endsection
