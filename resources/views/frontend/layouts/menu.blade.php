<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Libraries Stylesheet -->
    <link href="assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/frontend/lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/frontend/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/frontend/css/style.css" rel="stylesheet">

    <!--link for gallery-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css" />

</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!---Fixed Footer for Small Device-->
    <div class="container-fluid bg-light footerfixednav">
        <div class="row">
            <div class="col-3">
                <center>
                    <a href="index.html"><img src="assets/frontend/img/footicon1.png"
                            style="height:29px;margin-top: 8px;" /></a>
                </center>
            </div>
            <div class="col-3">
                <center>
                    <a href="tel:+91 9839136949"> <img src="assets/frontend/img/footicon2.png"
                            style="height:25px;margin-top: 8px;" /></a>
                </center>
            </div>
            <div class="col-3">
                <center>
                    <a href="https://wa.me/9839136949" target="_blank"><img src="assets/frontend/img/footicon3.png"
                            style="height:29px;margin-top: 7px;" /></a>
                </center>
            </div>
            <div class="col-3">
                <center>
                    <a href="booking.html"><img src="assets/frontend/img/footicon4.png"
                            style="height:24px;margin-top: 8px;" /></a>
                </center>
            </div>


        </div>
    </div>
    <!---Fixed Footer for Small Device-->

    <!-- Topbar Start -->
    <div class="container-fluid bg-primary px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://wa.me/9839136949" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.facebook.com/TheKashiTour/" target="_blank"><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.instagram.com/thekashitour/" target="_blank"><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="tel:+91 9839136949"><small class="me-3 text-light"><i class="fa fa-phone me-2"></i>Call
                            Us</small></a>
                    <a href="mailto:thekashitour@gmail.com"><small class="me-3 text-light"><i
                                class="fa fa-envelope me-2"></i>Mail
                            Us</small></a>
                    <a href="/login"><small class="me-3 text-light"><i
                                class="fa fa-sign-in-alt me-2"></i>Login</small></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>Travela</h1>
                <!-- <img src="assets/frontend/img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/home" class="nav-item nav-link active">Home</a>
                    <a href="/about-us" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu m-0">
                            <a href="/walkingtour" class="dropdown-item">Walking Tour</a>
                            <a href="/travelbooking" class="dropdown-item">Travel Booking</a>
                            <a href="/ricepudding" class="dropdown-item">Rice Pudding</a>
                            <a href="/roombooking" class="dropdown-item">Room Booking</a>
                        </div>
                    </div>
                    <a href="/gallery" class="nav-item nav-link">Gallery</a>
                    <a href="/contact-us" class="nav-item nav-link">Contact</a>
                </div>
                <a href="/book-us" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a>
            </div>
        </nav>

        @yield('content')

        <!-- Footer Start -->
        <div class="container-fluid bg-dark footer py-5 mt-5">
            <div class="container py-3">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Get In Touch</h4>
                            <a><i class="fas fa-home me-2"></i>CK8/151, Govindpura, Varanasi, Uttar Pradesh 221001</a>
                            <a href="mailto:thekashitour@gmail.com"><i class="fas fa-envelope me-2"></i>
                                thekashitour@gmail.com</a>
                            <a href="tel:+91 98391 36949"><i class="fas fa-phone me-2"></i> +91 98391 36949</a>
                            <div class="d-flex align-items-center mt-2">
                                <a class="btn-square btn btn-primary rounded-circle" href="https://wa.me/9839136949"
                                    target="_blank"><i class="fab fa-whatsapp"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1"
                                    href="https://www.facebook.com/TheKashiTour/" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>

                                <a class="btn-square btn btn-primary rounded-circle mx-1"
                                    href="https://www.instagram.com/thekashitour/" target="_blank"><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Important Links</h4>
                            <a href="/home"><i class="fas fa-angle-right me-2"></i> Home</a>
                            <a href="/about-us"><i class="fas fa-angle-right me-2"></i> About</a>
                            <a href="/gallery"><i class="fas fa-angle-right me-2"></i> Gallery</a>
                            <a href="/contact-us"><i class="fas fa-angle-right me-2"></i> Contact</a>
                            <a href="/book-us"><i class="fas fa-angle-right me-2"></i> Booking</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Services</h4>
                            <a href="/walkingtour"><i class="fas fa-angle-right me-2"></i> Walking Tour</a>
                            <a href="/travelbooking"><i class="fas fa-angle-right me-2"></i> Travel Booking</a>
                            <a href="/ricepudding"><i class="fas fa-angle-right me-2"></i> Rice Pudding</a>
                            <a href="/roombooking"><i class="fas fa-angle-right me-2"></i> Room Booking</a>
                            <a href="/term"><i class="fas fa-angle-right me-2"></i> Term & Condition</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <div class="row gy-3 gx-2 mb-4">
                                <h4 class="text-white mb-2">Language Spoken</h4>
                                <div class="col-xl-6 bg-dark border rounded me-2"
                                    style="width:100px;height:50px;padding:10px 20px;">
                                    English
                                </div>
                                <div class="col-xl-6 bg-dark border rounded"
                                    style="width:100px;height:50px;padding:10px 20px;">
                                    Italian
                                </div>
                            </div>
                            <h4 class="text-white mb-3">Payments</h4>
                            <div class="footer-bank-card">
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-amex fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-visa fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i
                                        class="fas fa-credit-card fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i
                                        class="fab fa-cc-mastercard fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-paypal fa-2x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer End -->

            <!-- Copyright Start -->

            <div class="container">
                <hr>
                <div class="row g-4 mt-2 align-items-center">
                    <div class="col-md-6 text-center text-light text-md-end mb-md-0">
                        <i class="fas fa-copyright me-2"></i>2024 <a class="text-primary">The Kashi Tour</a>
                    </div>
                    <div class="col-md-6 text-center text-light text-md-start">
                        | &ensp;
                        Developed By <a class="text-primary fw-bold" href="https://techomind.com"
                            target="_blank">Techomind</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i
                class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/frontend/lib/easing/easing.min.js"></script>
        <script src="assets/frontend/lib/waypoints/waypoints.min.js"></script>
        <script src="assets/frontend/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="assets/frontend/lib/lightbox/js/lightbox.min.js"></script>
        <script src="frontend/lib/counterup/counterup.min.js"></script>

        <!-- Template Javascript -->
        <script src="assets/frontend/js/main.js"></script>

        <!---js link for gallery-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
        <script>
            baguetteBox.run('.tz-gallery');
        </script>

</body>

</html>
