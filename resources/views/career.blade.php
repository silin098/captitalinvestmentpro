@extends('layouts.app')
@section('title')
    Career
@endsection
@section('content')

<div class="col-md-6 mx-auto mt-5 text-light vh-100">
    <h2 class="text-center">We're On The Lookout
        For Extraordinary Talent</h2>
    <p class="lead mt-3 text-center">
        If you're motivated, intelligent, passionate and looking for a meaningful work environment, captialinvestmentpro may just be the last place you send your resume to
    </p>
    <h3 class="text-center my-3 text-decoration-underline">Open  Vacancies</h3>
    <ol class="list-group px-3">
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class=" me-auto py-2">
                <div class="fw-bold">Customer Screening Specialist</div>
            </div>
            <a class="btn btn-dark align-self-center" href="{{route('customer-screening-specialist')}}">Apply</a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="me-auto">
                <div class="fw-bold">Human Resources

                </div>

            </div>
            <a class="btn btn-dark align-self-center" href="{{route('human-resource')}}">Apply</a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="me-auto">
                <div class="fw-bold">Business Development and Promotion

                </div>

            </div>
            <a class="btn btn-dark align-self-center" href="{{route('business-development')}}">Apply</a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="me-auto">
                <div class="fw-bold">Administrator

                </div>

            </div>
            <a class="btn btn-dark align-self-center" href="{{route('admin')}}">Apply</a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start ">
            <div class="me-auto">
                <div class="fw-bold">IT Technician
                </div>

            </div>
            <a class="btn btn-dark align-self-center" href="{{route('it-technician')}}">Apply</a>
        </li>
    </ol>



</div>



@endsection
