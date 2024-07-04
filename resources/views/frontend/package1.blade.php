@extends('frontend.layouts.menu')
@section('content')
    <title>Package Details : The Kashi Tour</title>
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Package Info</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item"><a href="/walkingtour">Walking tour</a></li>
                    <li class="breadcrumb-item active text-white">Package Info</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Package Detail Start -->
    <div class="container-fluid py-1">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6">
                    <img src="assets/frontend/img/tourpackage1.png" class="img-fluid w-100" />
                    <a href="/book-us">
                        <div class="btn btn-primary my-4">Book Now</div>
                    </a>
                    <a href="/walkingtour">
                        <div class="btn btn-primary my-4">Explore More</div>
                    </a>
                </div>
                <div class="col-lg-6">

                    <h2 class="mb-3 fw-bold">Varanasi One Day Tour</h2>
                    <h4 class="text-primary fw-bold">Rs. 4000</h4>
                    <p>Arrivals at Varanasi Airport/Railway Station, Our Representative will Meet & Greet you. Later
                        Transfer to your Pre Booked Hotel Check in to Hotel, Visit New Kashi Vishwanath Temple (BHU) also
                        known as Birla Temple, Sankat Mochan Temple, Durga Temple, Tulsi Manas Mandir, In the evening,
                        experience the Hindu Ritual Aarti. Aartis also refer to the songs sung in praise of the deity, when
                        offering of lamps is being offered. Hindus in India worship the river Ganges as goddess. Every
                        evening in Varanasi, aarti is performed at the Dashashwamedh Ghat. We can watch it from the Ghat or
                        from the waterside in a boat. It is a beautiful, resonant, and majestic spectacle with a very
                        precise choreography involving rituals performed by several priests with the sound of bells, drums,
                        cymbals, and Sanskrit mantras & Boating (Direct Payment) on River Ganga, Back to Hotel. Overnight
                        Stay at Varanasi.</p>
                </div>

            </div>
        </div>
    </div>
    <!-- Package Detail End -->
@endsection
