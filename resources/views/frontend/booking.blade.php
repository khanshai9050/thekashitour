@extends('frontend.layouts.menu')
@section('content')
    <title>Book Your Package : The Kashi Tour</title>

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Booking Package</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active text-white">Booking Package</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Tour Booking Start -->
    <div class="container-fluid py-1">
        <div class="container mt-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="text-dark mb-3 fw-bold">Book Your Tour Package</h2>
                    <p class="mb-4" style="color: gray;">We'd love to hear from you! Whether you have a question
                        about our tours, need assistance with booking, we're here to help.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-white border-1 border-primary"
                                        id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-white border-1 border-primary"
                                        id="address" placeholder="Your Address">
                                    <label for="email">Your Address</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control bg-white border-1 border-primary"
                                        id="number" placeholder="Your Number">
                                    <label for="email">Your Number</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-white border-1 border-primary"
                                        id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="datetime" class="form-control bg-white border-1 border-primary"
                                        id="datetime" placeholder="Date & Time" data-target="#date3"
                                        data-toggle="datetimepicker" />
                                    <label for="datetime">Date & Time</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select bg-white border-1 border-primary" id="select1">
                                        <option value="1">One Day Varanasi Tour</option>
                                        <option value="2">Two Day Varanasi Tour</option>
                                        <option value="3">Three Day Varanasi Tour</option>
                                        <option value="3">Varanasi Group Tour</option>
                                        <option value="3">Varanasi Holy Tour</option>
                                    </select>
                                    <label for="select1">Packages</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-white border-1 border-primary" placeholder="Special Request" id="message"
                                        style="height: 100px"></textarea>
                                    <label for="message">Special Request</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary text-white w-100 py-3" type="submit">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6 image-container">
                            <img src="assets/frontend/img/contactimg1.jpg" class="img-fluid"
                                style="border: 2px solid #ff6a00;" />
                        </div>
                        <div class="col-6 image-container">
                            <img src="assets/frontend/img/contactimg2.jpg" class="img-fluid"
                                style="border: 2px solid #ff6a00;" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 image-container">
                            <img src="assets/frontend/img/contactimg3.jpg" class="img-fluid mt-4"
                                style="border: 2px solid #ff6a00;" />
                        </div>
                        <div class="col-6 image-container">
                            <img src="assets/frontend/img/contactimg4.jpg" class="img-fluid mt-4"
                                style="border: 2px solid #ff6a00;" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 image-container">
                            <img src="assets/frontend/img/contactimg5.jpg" class="img-fluid mt-4"
                                style="border: 2px solid #ff6a00;" />
                        </div>
                        <div class="col-6 image-container">
                            <img src="assets/frontend/img/contactimg6.jpg" class="img-fluid mt-4"
                                style="border: 2px solid #ff6a00;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tour Booking End -->
@endsection
