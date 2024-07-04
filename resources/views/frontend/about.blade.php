@extends('frontend.layouts.menu')
@section('content')
    <title>About Us : The Kashi Tour</title>
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-3">About Us</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-primary" href="/home">Home</a></li>
                    <li class="breadcrumb-item active text-white">About</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid about py-3">
        <div class="container py-4">
            <div class="row align-items-center">

                <div class="col-lg-7"
                    style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(assets/frontend/img/about-img-1.png);">
                    <h6 class="section-about-title pe-3 fw-bold">About Us</h6>
                    <h2 class="mb-4 fw-bold">Welcome to <span class="text-primary">The Kashi Tour</span></h2>
                    <p class="mb-4">The Kashi Tour, your trusted partner in creating unforgettable travel experiences
                        at<span class="text-primary fw-bold"> the Nagri Of Lord Shiva</span>. Founded with a passion
                        for exploration and a dedication to excellence, we specialize in crafting bespoke tours and
                        travel packages that cater to every wanderlust-filled heart.
                    </p>

                    <p class="mb-4">Our journey began 1997 with a simple mission: to make travel dreams come true.
                        Over the years, we have grown into a reputable travel company, known for our personalized
                        service, in-depth knowledge of destinations, and commitment to delivering extraordinary
                        adventures. Our team of experienced travel enthusiasts is dedicated to ensuring that every trip
                        is a seamless blend of excitement, relaxation, and cultural immersion. They bring destinations
                        to life with captivating stories, historical context, and local secrets that you won't find in
                        any guidebook. With The Kashi Tour, you gain a deeper understanding and appreciation of the
                        Kashi.</p>

                    <p class="mb-4">We pride ourselves on offering exclusive experiences that go beyond the ordinary.
                        From private tours of historic landmarks to behind-the-scenes access at cultural events, we
                        provide unique opportunities that make your journey truly special. Our connections and
                        partnerships ensure that you experience the best each destination has to offer.</p>
                </div>
                <div class="col-lg-5">
                    <div class="h-100" style="border: 50px solid; border-color: transparent #ff6a00 transparent #ff6a00;">
                        <img src="assets/frontend/img/aboutimg1.jpg" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Work Counter Start -->
    <div class="container-fluid bg-light service py-5">
        <div class="container">
            <div class="mx-auto text-center mb-3" style="max-width: 900px;">
                <h6 class="section-title px-3 fw-bold">Work Says</h6>
                <h2 class="mb-0 fw-bold">From Desk to Destination</h2>
            </div>
            <div class='row'>
                <div class='col-lg-3 col-md-6 mt-3'>
                    <div class="d-flex align-items-center border-start border-5 border-primary px-3"
                        style="border-radius: 10px;">
                        <h1 class="flex-shrink-0 display-5 text-primary mb-0"><span
                                data-toggle="counter-up">25</span><span>+</span></h1>
                        <div class="ps-4">
                            <p class="mb-0">Travelling</p>
                            <h6 class="text-uppercase mb-0">Experience</h6>
                        </div>
                    </div>
                </div>
                <div class='col-lg-3 col-md-6 mt-3'>
                    <div class="d-flex align-items-center border-start border-5 border-primary px-3"
                        style="border-radius: 10px;">
                        <h1 class="flex-shrink-0 display-5 text-primary mb-0"><span
                                data-toggle="counter-up">12</span><span>K</span></h1>
                        <div class="ps-4">
                            <p class="mb-0">Happy</p>
                            <h6 class="text-uppercase mb-0">Traveller</h6>
                        </div>
                    </div>
                </div>
                <div class='col-lg-3 col-md-6 mt-3'>
                    <div class="d-flex align-items-center border-start border-5 border-primary px-3"
                        style="border-radius: 10px;">
                        <h1 class="flex-shrink-0 display-5 text-primary mb-0"><span
                                data-toggle="counter-up">5</span><span>+</span></h1>
                        <div class="ps-4">
                            <p class="mb-0">Comfortable</p>
                            <h6 class="text-uppercase mb-0">Rides</h6>
                        </div>
                    </div>
                </div>
                <div class='col-lg-3 col-md-6 mt-3'>
                    <div class="d-flex align-items-center border-start border-5 border-primary px-3"
                        style="border-radius: 10px;">
                        <h1 class="flex-shrink-0 display-5 text-primary mb-0"><span
                                data-toggle="counter-up">4</span><span>+</span></h1>
                        <div class="ps-4">
                            <p class="mb-0">Google Star</p>
                            <h6 class="text-uppercase mb-0">Rating</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Work Counter End -->

    <!-- Travel Guide Start -->
    <div class="container-fluid guide py-2">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h6 class="section-title px-3">Travel Guide</h6>
                <h2 class="mb-0">Meet Our Guide</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="assets/frontend/img/guide4.png" class="img-fluid w-100 rounded-top"
                                    alt="Image">
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Travel Guide (i)</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="assets/frontend/img/guide3.png" class="img-fluid w-100 rounded-top"
                                    alt="Image">
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Travel Guide (ii)</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="assets/frontend/img/guide1.png" class="img-fluid w-100 rounded-top"
                                    alt="Image">
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Travel Guide (iii)</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="assets/frontend/img/guide2.png" class="img-fluid w-100 rounded-top"
                                    alt="Image">
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Travel Guide (iv)</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Travel Guide End -->

    <!--faqs start-->
    <div class="container-fluid py-2">
        <div class="container">
            <div class="mx-auto text-center mb-3" style="max-width: 900px;">
                <h6 class="section-title px-3 fw-bold">Travellers' FAQs</h6>
                <h2 class="mb-0 fw-bold">Read Your Answers</h2>
            </div>
            <div class='row mt-4'>
                <div class="col-sm-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1. What services does The Kashi Tour offer?


                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We offer a wide range of services like :-
                                    <br>Tour Packages
                                    <br>Cab Booking
                                    <br>Room Booking
                                    <br>Walking Tour
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. How do I book a trip with The Kashi Tour?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Booking a trip with us is easy! You can visit our website and use our online booking
                                    system, call our customer service hotline, or visit one of our offices. Our travel
                                    experts are available to help you plan and book your perfect trip.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. Do you offer group travel packages?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, we offer a variety of group travel packages for families, friends, corporate
                                    teams, and special interest groups. Whether it's a guided tour, a corporate retreat,
                                    or a family reunion, we can arrange everything to ensure a smooth and enjoyable
                                    experience.


                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. Can I customize my travel itinerary?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Absolutely! We specialize in creating customized travel itineraries that cater to
                                    your specific interests, preferences, and budget. Contact our travel advisors to
                                    discuss your requirements, and we'll design a tailor-made itinerary just for you.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    5. How can I provide feedback about my travel experience?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We value your feedback and encourage you to share your experiences with us. After
                                    your trip, you will send your feedback via email. Alternatively, you can leave your
                                    valuable review on social media pages. Your feedback helps us improve our services
                                    and better serve our customers.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--faqs end-->
@endsection
