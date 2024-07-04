@extends('frontend.layouts.menu')
@section('content')
    <title>Walking Tour : The Kashi Tour</title>

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Walking Tour</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active text-white">Walking Tour</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Walking Tour Start -->
    <div class="container-fluid py-2">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h6 class="section-title px-3 fw-bold">Package Booking</h6>
                <h2 class="mb-4 fw-bold">Your Walking Tour Packages</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 tourpackage col-md-6">
                    <div class="tourpackage-item">
                        <div class="tourpackage-img">
                            <div class="tourpackage-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="assets/frontend/img/tourpackage1.png"
                                    alt="Image">
                            </div>
                        </div>
                        <div class="tourpackage-content border border-top-0 rounded-bottom p-4">

                            <h4 class="fw-bold">Varanasi One Day Tour Package</h4>
                            <h5 class="text-primary">Rs. 4000</h5>
                            <p class="my-3">Package Details Here</p>
                            <hr>
                            <a href="/package1" class="btn btn-primary me-2">Explore More</a>
                            <a href="/book-us" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 tourpackage col-md-6">
                    <div class="tourpackage-item">
                        <div class="tourpackage-img">
                            <div class="tourpackage-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="assets/frontend/img/tourpackage2.png"
                                    alt="Image">
                            </div>
                        </div>
                        <div class="tourpackage-content border border-top-0 rounded-bottom p-4">

                            <h4 class="fw-bold">Varanasi Two Day Tour Package</h4>
                            <h5 class="text-primary">Rs. 8000</h5>
                            <p class="my-3">Package Details Here</p>
                            <hr>
                            <a href="/package1" class="btn btn-primary me-2">Explore More</a>
                            <a href="/book-us" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 tourpackage col-md-6">
                    <div class="tourpackage-item">
                        <div class="tourpackage-img">
                            <div class="tourpackage-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="assets/frontend/img/tourpackage3.png"
                                    alt="Image">
                            </div>
                        </div>
                        <div class="tourpackage-content border border-top-0 rounded-bottom p-4">

                            <h4 class="fw-bold">Varanasi Three Day Tour Package</h4>
                            <h5 class="text-primary">Rs. 14000</h5>
                            <p class="my-3">Package Details Here</p>
                            <hr>
                            <a href="/package1" class="btn btn-primary me-2">Explore More</a>
                            <a href="/book-us" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 tourpackage col-md-6">
                    <div class="tourpackage-item">
                        <div class="tourpackage-img">
                            <div class="tourpackage-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="assets/frontend/img/tourpackage4.png"
                                    alt="Image">
                            </div>
                        </div>
                        <div class="tourpackage-content border border-top-0 rounded-bottom p-4">

                            <h4 class="fw-bold">Varanasi Group Tour</h4>
                            <h5 class="text-primary">Rs. 4000 / Head</h5>
                            <p class="my-3">Package Details Here</p>
                            <hr>
                            <a href="/package1" class="btn btn-primary me-2">Explore More</a>
                            <a href="/book-us" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Walking Tour End -->
@endsection
