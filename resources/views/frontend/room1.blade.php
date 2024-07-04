@extends('frontend.layouts.menu')
@section('content')
    <title>Room Details : The Kashi Tour</title>
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Room Info</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item"><a href="/roombooking">Room Booking</a></li>
                    <li class="breadcrumb-item active text-white">Room Info</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Package Detail Start -->
    <div class="container-fluid py-1">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8 ricepuddingborder">
                    <h2 class="mb-3 fw-bold">Single Room</h2>
                    <img src="assets/frontend/img/room1.jpg" class="img-fluid w-100" />
                    <h4 class="text-primary fw-bold mt-3">Rs. 4000</h4>
                    <p>Our single rooms are designed to provide a comfortable and restful stay for
                        solo travelers. Whether you're here for business or leisure, our single rooms offer a
                        perfect blend of comfort, convenience, and style.</p>
                </div>
                <div class="col-sm-4 mt-3">
                    <h4 class="fw-bold">Facilities You Get</h4>
                    <hr><br>
                    <i class="fa-solid fa-fan fa-2x text-primary"></i>&ensp; <span style="font-size:20px;">Air
                        Condition</span><br><br>
                    <i class="fa-solid fa-glass-water fa-2x text-primary"></i>&ensp; <span style="font-size:20px;">Free
                        drinks</span><br><br>
                    <i class="fa-solid fa-bowl-food fa-2x text-primary"></i>&ensp; <span style="font-size:20px;">Clean
                        Food</span><br><br>
                    <i class='fa-solid fa-tv fa-2x text-primary'></i>&ensp; <span style="font-size:20px;">Cable
                        TV</span><br><br>
                    <i class='fa-solid fa-wifi fa-2x text-primary'></i>&ensp; <span style="font-size:20px;">Unlimited
                        Wifi</span><br><br>
                    <i class='fa-solid fa-check fa-2x text-primary'></i>&ensp; <span style="font-size:20px;"> Trusted
                        Service
                    </span><br><br>



                </div>
            </div>
        </div>
    </div>
    <!-- Package Detail End -->
@endsection
