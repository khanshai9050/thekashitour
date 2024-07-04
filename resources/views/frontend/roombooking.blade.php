@extends('frontend.layouts.menu')
@section('content')
    <title>Room Booking : The Kashi Tour</title>
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Room Booking</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active text-white">Room Booking</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->
    <!--room booking start-->
    <div class="container-fluid py-2">
        <div class="container mt-5">
            <div class="mx-auto text-center" style="max-width: 900px;">
                <h6 class="section-title px-3 fw-bold">Book Your Room</h6>
                <h2 class="mb-0 fw-bold">Feel Like Home</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 roombook col-md-6">
                    <div class="roombook-item">
                        <div class="roombook-img">
                            <div class="roombook-img-inner">
                                <img class="img-fluid w-100" src="assets/frontend/img/room1.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="roombook-content p-3">

                            <p style="font-size: 15px;"><i class="fa-solid fa-wifi text-primary me-2"></i>Free Wifi
                                <i class="fa-solid fa-bath text-primary mx-2"></i>Bathroom
                                <i class="fa-solid fa-bed text-primary mx-2"></i>Bed
                            </p>
                            <hr>
                            <h4 class="fw-bold">Single Room</h4>
                            <h5 class="text-primary">Rs. 4000</h5>
                            <p class="my-3">Our single rooms are designed to provide a comfortable and restful stay for
                                solo travelers. Whether you're here for business or leisure, our single rooms offer a
                                perfect blend of comfort, convenience, and style.</p>
                            <a href="/room1" class="btn btn-primary me-2">Explore More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 roombook col-md-6">
                    <div class="roombook-item">
                        <div class="roombook-img">
                            <div class="roombook-img-inner">
                                <img class="img-fluid w-100" src="assets/frontend/img/room2.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="roombook-content p-3">

                            <p style="font-size: 15px;"><i class="fa-solid fa-wifi text-primary me-2"></i>Free Wifi
                                <i class="fa-solid fa-bath text-primary mx-2"></i>Bathroom
                                <i class="fa-solid fa-bed text-primary mx-2"></i>Bed
                            </p>
                            <hr>
                            <h4 class="fw-bold">Executive Room</h4>
                            <h5 class="text-primary">Rs. 6000/Night</h5>
                            <p class="my-3">Our Executive Rooms are designed to provide an unparalleled experience for
                                discerning travelers. With spacious interiors, elegant decor, and premium amenities, these
                                rooms offer the perfect blend of luxury and convenience, ideal for both business and leisure
                                stays.</p>
                            <a href="/room1" class="btn btn-primary me-2">Explore More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 roombook col-md-6">
                    <div class="roombook-item">
                        <div class="roombook-img">
                            <div class="roombook-img-inner">
                                <img class="img-fluid w-100" src="assets/frontend/img/room3.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="roombook-content p-3">

                            <p style="font-size: 15px;"><i class="fa-solid fa-wifi text-primary me-2"></i>Free Wifi
                                <i class="fa-solid fa-bath text-primary mx-2"></i>Bathroom
                                <i class="fa-solid fa-bed text-primary mx-2"></i>Bed
                            </p>
                            <hr>
                            <h4 class="fw-bold">Family Room</h4>
                            <h5 class="text-primary">Rs. 8000/Night</h5>
                            <p class="my-3">Our Family Rooms are thoughtfully designed to accommodate families traveling
                                together, providing ample space, comfort, and convenience. Enjoy a relaxing stay with all
                                the amenities you need to make your family vacation memorable and enjoyable.</p>
                            <a href="/room1" class="btn btn-primary me-2">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end room booking -->
@endsection
