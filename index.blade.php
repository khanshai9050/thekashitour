 @extends('frontend.layouts.menu')
 @section('content')
     <!-- Navbar & Hero Start -->
     <!-- Carousel Start -->
     <div class="carousel-header">
         <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
             <ol class="carousel-indicators">
                 <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                 <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                 <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
             </ol>
             <div class="carousel-inner" role="listbox">
                 <div class="carousel-item active">
                     <img src="assets/frontend/img/carousel1.jpg" class="img-fluid w-100" alt="Image">

                 </div>
                 <div class="carousel-item">
                     <img src="assets/frontend/img/carousel2.jpg" class="img-fluid w-100" alt="Image">

                 </div>
                 <div class="carousel-item">
                     <img src="assets/frontend/img/carousel3.jpg" class="img-fluid w-100" alt="Image">

                 </div>
             </div>
             <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                 <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                 <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                 <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                 <span class="visually-hidden">Next</span>
             </button>
         </div>
     </div>
     <!-- Carousel End -->
     </div>
     <!-- Navbar & Hero End -->

     <!-- About Start -->
     <div class="container-fluid about py-3">
         <div class="container py-5">
             <div class="row g-5 align-items-center">
                 <div class="col-lg-5">
                     <div class="h-100" style="border: 50px solid; border-color: transparent #ff6a00 transparent #ff6a00;">
                         <img src="assets/frontend/img/aboutimg.jpeg" class="img-fluid w-100" alt="">
                     </div>
                 </div>
                 <div class="col-lg-7"
                     style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(frontend/img/about-img-1.png);">
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
                         is a seamless blend of excitement, relaxation, and cultural immersion.</p>
                     <div class="row gy-2 gx-4 mb-4">
                         <div class="col-sm-6">
                             <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Affordable Tour
                                 Packages</p>
                         </div>
                         <div class="col-sm-6">
                             <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Personalized Service
                             </p>
                         </div>
                         <div class="col-sm-6">
                             <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Safety and Comfort
                             </p>
                         </div>
                         <div class="col-sm-6">
                             <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Expert Tour Guide</p>
                         </div>
                         <div class="col-sm-6">
                             <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Comfortable Cabs</p>
                         </div>
                         <div class="col-sm-6">
                             <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>25+ Experience</p>
                         </div>
                     </div>
                     <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="/about-us">Read More</a>
                 </div>
             </div>
         </div>
     </div>
     <!-- About End -->

     <!-- Services Start -->
     <div class="container-fluid bg-light service py-5">
         <div class="container py-3">
             <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                 <h6 class="section-title px-3 fw-bold">Searvices</h6>
                 <h2 class="mb-0 fw-bold">Our Services</h2>
             </div>
             <div class="row g-4">
                 <div class="col-lg-6">
                     <div class="row g-4">
                         <a href="/roombooking" style="color:grey;">
                             <div class="col-12">
                                 <div
                                     class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                     <div class="service-icon p-4">
                                         <i class="fa-solid fa-bed fa-4x text-primary"></i>
                                     </div>
                                     <div class="service-content">
                                         <h5 class="mb-4">Room Booking</h5>
                                         <p class="mb-0">We understand that where you stay can make or break your
                                             travel experience. That’s why we’re committed to helping you find the
                                             perfect accommodation that fits your needs, preferences, and budget. Whether
                                             you’re looking for a luxurious hotel, a cozy bed and breakfast, or a
                                             budget-friendly hostel, we’ve got you covered.
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         </a>

                         <a href="/travelbooking" style="color:grey;">
                             <div class="col-12">
                                 <div
                                     class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                     <div class="service-icon p-4">
                                         <i class="fa-solid fa-car fa-4x text-primary"></i>
                                     </div>
                                     <div class="service-content">
                                         <h5 class="mb-4">Travel Booking</h5>
                                         <p class="mb-0">We strive to make the process as smooth and enjoyable as
                                             possible. Our comprehensive travel booking services are designed to take the
                                             hassle out of your travel arrangements, allowing you to focus on what truly
                                             matters – enjoying your journey with The Kashi Tour.<br><br>
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         </a>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="row g-4">
                         <a href="/ricepudding" style="color:grey;">
                             <div class="col-12">
                                 <div
                                     class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                     <div class="service-icon p-4">
                                         <i class="fa-solid fa-bowl-rice fa-4x text-primary"></i>
                                     </div>
                                     <div class="service-content">
                                         <h5 class="mb-4">Rice Pudding</h5>
                                         <p class="mb-0">We believe that travel is not just about visiting new places,
                                             but also about tasting new flavors. Our exclusive Rice Pudding experiences
                                             offer you a delicious journey through diverse cultures and traditions,
                                             allowing you to savor this classic dessert in its various delightful forms
                                             around the world.
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         </a>

                         <a href="/walkingtour" style="color:grey;">
                             <div class="col-12">
                                 <div
                                     class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                     <div class="service-icon p-4">
                                         <i class="fa-solid fa-person-walking fa-4x text-primary"></i>
                                     </div>
                                     <div class="service-content">
                                         <h5 class="mb-4">Walking Tour</h5>
                                         <p class="mb-0">We believe that the best way to truly experience a
                                             destination is on foot. Our walking tours are designed to immerse you in the
                                             local culture, history, and natural beauty of each location, providing an
                                             intimate and engaging travel experience.Our walking tours are led by
                                             knowledgeable and passionate local guides.
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Services End -->

     <!-- Walking Tour Start -->
     <div class="container-fluid packages py-3">
         <div class="container py-5">
             <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                 <h6 class="section-title px-3 fw-bold">Walking Tour</h6>
                 <h2 class="mb-0 fw-bold">Awesome Tour Packages</h2>
             </div>
             <div class="packages-carousel owl-carousel">
                 <div class="packages-item">
                     <div class="packages-img">
                         <img src="assets/frontend/img/package4.jpg" class="img-fluid w-100 rounded-top" alt="Image">

                         <div class="packages-price py-2 px-4">₹ 4000</div>
                     </div>
                     <div class="packages-content bg-light">
                         <div class="p-4 pb-0">
                             <h5 class="mb-0">Varanasi One Day Tour</h5>
                             <div class="mb-3">
                                 <small class="fa fa-star text-primary"></small>
                                 <small class="fa fa-star text-primary"></small>
                                 <small class="fa fa-star text-primary"></small>
                                 <small class="fa fa-star text-primary"></small>
                                 <small class="fa fa-star text-primary"></small>
                             </div>
                             <p class="mb-4">Package Details Here</p>
                         </div>
                         <div class="row bg-primary rounded-bottom mx-0">

                             <div class="col-6 text-start px-0">
                                 <a href="/walkingtour" class="btn btn text-white py-2 px-4">Know Now</a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="packages-item">
                     <div class="packages-img">
                         <img src="assets/frontend/img/package3.jpg" class="img-fluid w-100 rounded-top" alt="Image">

                         <div class="packages-price py-2 px-4">₹ 8000</div>
                     </div>
                     <div class="packages-content bg-light">
                         <div class="p-4 pb-0">
                             <h5 class="mb-0">Varanasi Two Day Tour</h5>
                             <div class="mb-3">
                                 <small class="fa fa-star text-primary"></small>
                                 <small class="fa fa-star text-primary"></small>
                                 <small class="fa fa-star text-primary"></small>
                                 <small class="fa fa-star text-primary"></small>
                                 <small class="fa fa-star text-primary"></small>
                             </div>
                             <p class="mb-4">Package Details Here</p>
                         </div>
                         <div class="row bg-primary rounded-bottom mx-0">

                             <div class="col-6 text-start px-0">
                                 <a href="/walkingtour" class="btn btn text-white py-2 px-4">Know Now</a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="packages-item">
                     <div class="packages-img">
                         <img src="assets/frontend/img/package2.jpg" class="img-fluid w-100 rounded-top" alt="Image">

                         <div class="packages-price py-2 px-4">₹ 9000</div>
                     </div>
                     <div class="packages-content bg-light">
                         <div class="p-4 pb-0">
                             <h5 class="mb-0">Varanasi Group Tour</h5>
                             <div class="mb-3">
                                 <small class="fa fa-star text-primary"></small>
                                 <small class="fa fa-star text-primary"></small>
                                 <small class="fa fa-star text-primary"></small>
                                 <small class="fa fa-star text-primary"></small>
                                 <small class="fa fa-star text-primary"></small>
                             </div>
                             <p class="mb-4">Package Details Here</p>
                         </div>
                         <div class="row bg-primary rounded-bottom mx-0">

                             <div class="col-6 text-start px-0">
                                 <a href="/walkingtour" class="btn btn text-white py-2 px-4">Know Now</a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="packages-item">
                     <div class="packages-img">
                         <img src="assets/frontend/img/package1.jpg" class="img-fluid w-100 rounded-top" alt="Image">

                         <div class="packages-price py-2 px-4">₹ 7000</div>
                     </div>
                     <div class="packages-content bg-light">
                         <div class="p-4 pb-0">
                             <h5 class="mb-0">Varanasi Holy Tour</h5>
                             <div class="mb-3">
                                 <small class="fa fa-star text-primary"></small>
                                 <small class="fa fa-star text-primary"></small>
                                 <small class="fa fa-star text-primary"></small>
                                 <small class="fa fa-star text-primary"></small>
                                 <small class="fa fa-star text-primary"></small>
                             </div>
                             <p class="mb-4">Package Details Here</p>
                         </div>
                         <div class="row bg-primary rounded-bottom mx-0">

                             <div class="col-6 text-start px-0">
                                 <a href="/walkingtour" class="btn btn text-white py-2 px-4">Know Now</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Walking Tour End -->

     <!-- Booking Step Start -->
     <div class="container-fluid bg-light service py-5">
         <div class="container">
             <div class="mx-auto text-center mb-3" style="max-width: 900px;">
                 <h6 class="section-title px-3 fw-bold">Booking Steps</h6>
                 <h2 class="mb-0 fw-bold">How To Book?</h2>
             </div>
             <div class='row'>
                 <div class='col-lg-2 col-md-6 mt-3'>
                     <center>
                         <div class='ProcessIcon'>
                             <img src='assets/frontend/img/bookicon1.png' style='height:60px;width:60px;' />
                         </div>
                     </center>
                     <h6 class='mt-4 text-center'>1. Book Your Package</h6>
                 </div>
                 <div class='col-lg-1 DisProcess'>
                     <center><img src='assets/frontend/img/arrowright.png' /></center>
                 </div>
                 <div class='col-lg-3 col-md-6 mt-3'>
                     <center>
                         <div class='ProcessIcon'>
                             <img src='assets/frontend/img/bookicon2.png' style='height:60px;width:60px;' />
                         </div>
                     </center>
                     <h6 class='mt-4 text-center'>2. Confirm Your Booking</h6>
                 </div>
                 <div class='col-lg-1 DisProcess'>
                     <center><img src='assets/frontend/img/arrowright.png' /></center>
                 </div>
                 <div class='col-lg-2 col-md-6 mt-3'>
                     <center>
                         <div class='ProcessIcon'>
                             <img src='assets/frontend/img/bookicon3.png' style='height:60px;width:60px;' />
                         </div>
                     </center>
                     <h6 class='mt-4 text-center'>3. Prepare Luggage </h6>
                 </div>
                 <div class='col-lg-1 DisProcess'>
                     <center><img src='assets/frontend/img/arrowright.png' /></center>
                 </div>
                 <div class='col-lg-2 col-md-6 mt-3'>
                     <center>
                         <div class='ProcessIcon'>
                             <img src='assets/frontend/img/bookicon4.png' style='height:60px;width:60px;' />
                         </div>
                     </center>
                     <h6 class='mt-4 text-center'>4. Explore Kashi</h6>
                 </div>
             </div>
         </div>
     </div>
     </div>
     <!-- Booking Step End -->

     <!-- Cab Booking Start -->
     <div class="container-fluid ExploreTour mt-5">
         <div class="container">
             <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                 <h6 class="section-title px-3 fw-bold">Travel Booking</h6>
                 <h2 class="mb-4 fw-bold">Book Your Comfort</h2>
             </div>
             <div class="tab-class text-center">


                 <div id="InternationalTab-2" class="tab-pane fade show p-0">
                     <div class="InternationalTour-carousel owl-carousel">
                         <div class="international-item">
                             <img src="assets/frontend/img/cab1.jpg" class="img-fluid w-100 rounded" alt="Image">
                             <div class="international-content">
                                 <div class="international-info">
                                     <h5 class="text-white text-uppercase mb-2">Swift Dezire</h5>
                                 </div>
                             </div>
                             <div class="tour-offer bg-success">₹ 11 / KM</div>

                         </div>
                         <div class="international-item">
                             <img src="assets/frontend/img/cab2.jpg" class="img-fluid w-100 rounded" alt="Image">
                             <div class="international-content">
                                 <div class="international-info">
                                     <h5 class="text-white text-uppercase mb-2">Ertiga</h5>
                                 </div>
                             </div>
                             <div class="tour-offer bg-warning">₹ 13 / KM</div>

                         </div>
                         <div class="international-item">
                             <img src="assets/frontend/img/cab3.jpg" class="img-fluid w-100 rounded" alt="Image">
                             <div class="international-content">
                                 <div class="international-info">
                                     <h5 class="text-white text-uppercase mb-2">Toyota Crysta</h5>
                                 </div>
                             </div>
                             <div class="tour-offer bg-danger">₹ 17 / KM</div>

                         </div>
                         <div class="international-item">
                             <img src="assets/frontend/img/cab4.jpg" class="img-fluid w-100 rounded" alt="Image">
                             <div class="international-content">
                                 <div class="international-info">
                                     <h5 class="text-white text-uppercase mb-2">Toyota Innova</h5>
                                 </div>
                             </div>
                             <div class="tour-offer bg-info">₹ 15 / KM</div>

                         </div>
                         <div class="international-item">
                             <img src="assets/frontend/img/cab5.jpg" class="img-fluid w-100 rounded" alt="Image">
                             <div class="international-content">
                                 <div class="international-info">
                                     <h5 class="text-white text-uppercase mb-2">Honda City</h5>
                                 </div>
                             </div>
                             <div class="tour-offer bg-dark">₹ 17 / KM</div>

                         </div>
                     </div>
                 </div>
                 <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="/travelbooking">Explore Cabs</a>
             </div>
         </div>
     </div>
     <!-- Cab Booking Start -->

     <!-- Rice Pudding Start -->
     <div class="container-fluid subscribe mt-5 py-5">
         <div class="container text-center">
             <div class="mx-auto text-center" style="max-width: 900px;">
                 <h6 class="subscribe-title px-3 fw-bold">Rice Pudding</h6>
                 <h2 class="text-white mb-4 fw-bold">Sweet Tradition, Timeless Taste</h2>
                 <p class="text-white mb-5">At The Kashi Tour, we believe that comfort and culinary delight should go
                     hand in hand. That’s why we’re proud to offer our guests a timeless classic: our signature rice
                     pudding. This cherished dessert is crafted with care, bringing you the perfect blend of creamy
                     texture and rich, sweet flavor.<br>
                     Rice pudding is more than just a dessert; it’s a taste of home, a reminder of cozy kitchens and
                     family gatherings. Our chefs have perfected a recipe that honors this tradition while adding a touch
                     of modern elegance. Each serving is made with high-quality ingredients, including premium rice,
                     fresh milk, and a hint of vanilla, all cooked to perfection.
                 </p>
                 <a class="btn btn-primary rounded-pill py-3 px-5" href="/ricepudding">Know More</a>

             </div>
         </div>
     </div>
     <!-- Rice Pudding End -->

     <!-- Room Booking Start -->
     <div class="container-fluid blog py-2">
         <div class="container py-5">
             <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                 <h6 class="section-title px-3 fw-bold">Room Booking</h6>
                 <h2 class="mb-4 fw-bold">Discover, Book, Relax</h2>
             </div>
             <div class="row g-4 justify-content-center">
                 <div class="col-lg-4 col-md-6">
                     <div class="blog-item">
                         <div class="blog-img">
                             <div class="blog-img-inner">
                                 <img class="img-fluid w-100 rounded-top" src="assets/frontend/img/room1.jpg"
                                     alt="Image">
                                 <div class="blog-icon">

                                 </div>
                             </div>
                         </div>
                         <div class="blog-content border border-top-0 rounded-bottom p-4">

                             <h4 class="fw-bold">Single Room</h4>
                             <p class="my-3">Designed for one person, typically featuring a single bed.</p>
                             <a href="/roombooking" class="btn btn-primary rounded-pill py-2 px-4">Explore More</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6">
                     <div class="blog-item">
                         <div class="blog-img">
                             <div class="blog-img-inner">
                                 <img class="img-fluid w-100 rounded-top" src="assets/frontend/img/room2.jpg"
                                     alt="Image">
                                 <div class="blog-icon">

                                 </div>
                             </div>
                         </div>
                         <div class="blog-content border border-top-0 rounded-bottom p-4">

                             <h4 class="fw-bold">Executive Room</h4>
                             <p class="my-3">Tailored for business travelers, often with a work area and enhanced
                                 amenities.</p>
                             <a href="/roombooking" class="btn btn-primary rounded-pill py-2 px-4">Explore More</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6">
                     <div class="blog-item">
                         <div class="blog-img">
                             <div class="blog-img-inner">
                                 <img class="img-fluid w-100 rounded-top" src="assets/frontend/img/room3.jpg"
                                     alt="Image">
                                 <div class="blog-icon">

                                 </div>
                             </div>
                         </div>
                         <div class="blog-content border border-top-0 rounded-bottom p-4">

                             <h4 class="fw-bold">Family Room</h4>
                             <p class="my-3">Spacious enough to accommodate families, often with multiple beds..</p>
                             <a href="/roombooking" class="btn btn-primary rounded-pill py-2 px-4">Explore More</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Room Booking End -->

     <!-- Testimonial Start -->
     <div class="container-fluid testimonial">
         <div class="container py-2">
             <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                 <h6 class="section-title px-3 fw-bold">Testimonial</h6>
                 <h2 class="mb-0 fw-bold">Our Traveller Say!!!</h2>
             </div>
             <div class="testimonial-carousel owl-carousel">
                 <div class="testimonial-item text-center rounded pb-4">
                     <div class="testimonial-comment bg-light rounded p-4">
                         <p class="text-center mb-3">Prakash is the best guide we’ve had in India. Sometimes it can be
                             challenging navigating places and transportation as a foreigner. Prakash made it super easy.
                             Experienced + trustworthy. Happy and satisfied with the service.

                         </p>
                         <h5 class="mb-0">Trevor Kinkade</h5>
                         <p class="d-flex justify-content-center">
                             <i class="fas fa-star text-warning"></i>
                             <i class="fas fa-star text-warning"></i>
                             <i class="fas fa-star text-warning"></i>
                             <i class="fas fa-star text-warning"></i>
                             <i class="fas fa-star text-warning"></i>
                         </p>
                     </div>
                 </div>
                 <div class="testimonial-item text-center rounded pb-4">
                     <div class="testimonial-comment bg-light rounded p-4">
                         <p class="text-center mb-3">Prakash is the best guide in Varanasi, he tailors his tours
                             according to the interests of his guests. I would recommend it to anyone visiting Varanasi.
                             He speaks fluent English and Italian. I am fully satisfied with their service.
                         </p>
                         <h5 class="mb-0">Andrea Battistello</h5>
                         <p class="d-flex justify-content-center">
                             <i class="fas fa-star text-warning"></i>
                             <i class="fas fa-star text-warning"></i>
                             <i class="fas fa-star text-warning"></i>
                             <i class="fas fa-star text-warning"></i>
                             <i class="fas fa-star text-warning"></i>
                         </p>
                     </div>
                 </div>
                 <div class="testimonial-item text-center rounded pb-4">
                     <div class="testimonial-comment bg-light rounded p-4">
                         <p class="text-center mb-3">Mr. Prakash was very helpful in guiding us in Kashi. We could visit
                             all the important temples and Saranath in just one and a half day. I would highly recommend
                             his tour company and will definitely go with them if I visit Kashi again.
                         </p>
                         <h5 class="mb-0">Bharathi Mukund</h5>
                         <p class="d-flex justify-content-center">
                             <i class="fas fa-star text-warning"></i>
                             <i class="fas fa-star text-warning"></i>
                             <i class="fas fa-star text-warning"></i>
                             <i class="fas fa-star text-warning"></i>
                             <i class="fas fa-star text-warning"></i>
                         </p>
                     </div>
                 </div>
                 <div class="testimonial-item text-center rounded pb-4">
                     <div class="testimonial-comment bg-light rounded p-4">
                         <p class="text-center mb-3">A very knowledgeable guide for Varanasi. He was able to take us
                             through touristic and authentic Varanasi alike, timing all entries and exits well to avoid
                             crowds. Thank you so much for this amazing service.
                         </p>
                         <h5 class="mb-0">Enrico Anderlini</h5>
                         <p class="d-flex justify-content-center">
                             <i class="fas fa-star text-warning"></i>
                             <i class="fas fa-star text-warning"></i>
                             <i class="fas fa-star text-warning"></i>
                             <i class="fas fa-star text-warning"></i>
                             <i class="fas fa-star text-warning"></i>
                         </p>
                     </div>
                 </div>
             </div>

         </div>
     </div>
     <!-- Testimonial End -->
 @endsection
