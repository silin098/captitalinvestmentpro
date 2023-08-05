@extends('layouts.app')
@section('title')
    Career
@endsection
@section('content')

<div class="col-md-6 mx-auto mt-5 text-light vh-100">

    <h2 class="text-center">We're On The Lookout
        For Extraordinary Talent</h2>
    <p class="lead mt-5 text-center">
        If you're motivated, intelligent, passionate and looking for a meaningful work environment, captialinvestmentpro may just be the last place you send your resume to
    </p>

    <h3 class="text-center my-5 text-decoration-underline">Open Positions</h3>
    <ol class="list-group px-3g">
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto py-2">
                <div class="fw-bold">Customer Screening specialist</div>

            </div>
            <a class="btn btn-dark align-self-center" href="{{route('customer-screening-specialist')}}">Apply</a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Human resources

                </div>

            </div>
            <a class="btn btn-dark align-self-center" href="{{route('human-resource')}}">Apply</a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Business Development and Promotion

                </div>

            </div>
            <a class="btn btn-dark align-self-center" href="{{route('business-development')}}">Apply</a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Administrator

                </div>

            </div>
            <a class="btn btn-dark align-self-center" href="{{route('admin')}}">Apply</a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start ">
            <div class="ms-2 me-auto">
                <div class="fw-bold">IT technician

                </div>

            </div>
            <a class="btn btn-dark align-self-center" href="{{route('it-technician')}}">Apply</a>
        </li>
    </ol>
   </div>


@endsection
