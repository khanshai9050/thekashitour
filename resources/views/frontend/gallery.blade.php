@extends('frontend.layouts.menu')
@section('content')
    <title>Gallery : The Kashi Tour</title>

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Our Gallery</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active text-white">Gallery</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Gallery Start -->
    <div class="container-fluid gallery mt-5 my-2">
        <div class="mx-auto text-center mb-3" style="max-width: 900px;">
            <h6 class="section-title px-3 fw-bold">Our Gallery</h6>
            <h2 class="fw-bold">Tourism & Traveling Gallery.</h2>

        </div>
        <div class="container gallery-container mt-0">

            <div class="tz-gallery">

                <div class="row">

                    <div class="col-6 col-md-3 mt-4">
                        <a class="" href="assets/frontend/img/gallery1.jpg">
                            <img src="assets/frontend/img/gallery1.jpg" class="w-100 galleryborder" alt="Park" />
                        </a>
                    </div>
                    <div class="col-6 col-md-3 mt-4">
                        <a class="" href="assets/frontend/img/gallery6.jpg">
                            <img src="assets/frontend/img/gallery6.jpg" class="w-100 galleryborder" alt="Park">
                        </a>
                    </div>
                    <div class="col-6 col-md-3 mt-4">
                        <a class="" href="assets/frontend/img/gallery9.jpg">
                            <img src="assets/frontend/img/gallery9.jpg" class="w-100 galleryborder" alt="Park">
                        </a>
                    </div>
                    <div class="col-6 col-md-3 mt-4">
                        <a class="" href="assets/frontend/img/gallery4.jpg">
                            <img src="assets/frontend/img/gallery4.jpg" class="w-100 galleryborder" alt="Park">
                        </a>
                    </div>
                    <div class="col-6 col-md-4 mt-4">
                        <a class="" href="assets/frontend/img/gallery7.jpg">
                            <img src="assets/frontend/img/gallery7.jpg" class="w-100 galleryborder" alt="Park">
                        </a>
                    </div>
                    <div class="col-6 col-md-4 mt-4">
                        <a class="" href="assets/frontend/img/gallery5.jpg">
                            <img src="assets/frontend/img/gallery5.jpg" class="w-100 galleryborder" alt="Park">
                        </a>
                    </div>

                    <div class="col-6 col-md-4 mt-4">
                        <a class="" href="assets/frontend/img/gallery2.jpg">
                            <img src="assets/frontend/img/gallery2.jpg" class="w-100 galleryborder" alt="Park">
                        </a>
                    </div>
                    <div class="col-6 col-md-4 mt-4">
                        <a class="" href="assets/frontend/img/gallery11.jpg">
                            <img src="assets/frontend/img/gallery11.jpg" class="w-100 galleryborder" alt="Park">
                        </a>
                    </div>
                    <div class="col-6 col-md-4 mt-4">
                        <a class="" href="assets/frontend/img/gallery12.jpg">
                            <img src="assets/frontend/img/gallery12.jpg" class="w-100 galleryborder" alt="Park">
                        </a>
                    </div>
                    <div class="col-6 col-md-4 mt-4">
                        <a class="" href="assets/frontend/img/gallery3.jpg">
                            <img src="assets/frontend/img/gallery3.jpg" class="w-100 galleryborder" alt="Park">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->
@endsection
