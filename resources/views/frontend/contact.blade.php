    @extends('frontend.layouts.menu')
    @section('content')
        <title>Contact Us : The Kashi Tour</title>
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Contact Us</h1>
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active text-white">Contact</li>
                    </ol>
            </div>
        </div>
        <!-- Header End -->

        <!-- Contact Start -->
        <div class="container-fluid contact bg-light py-3">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h6 class="section-title px-3 fw-bold">Contact Us</h6>
                    <h2 class="mb-0 fw-bold">Contact For Any Query</h2>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-4">
                        <div class="bg-white rounded p-4">
                            <div class="text-center mb-4">
                                <i class="fa fa-map-marker-alt fa-3x text-primary"></i>
                                <h4 class="text-primary">
                                    <Address></Address>
                                </h4>
                                <p class="mb-0">Manikarnika Ghat, CK8/151, near Shanti Guest House, Govindpura,
                                    Varanasi, Domari, Uttar Pradesh 221001</p>
                            </div>
                            <div class="text-center mb-4">
                                <i class="fa fa-phone-alt fa-3x text-primary mb-3"></i>
                                <h4 class="text-primary">Mobile</h4>
                                <a href="tel:+91 98391 36949" style="color: grey;">
                                    <p class="mb-0">+91 98391 3694</p>
                                </a>
                            </div>

                            <div class="text-center mb-4">
                                <i class="fa fa-envelope-open fa-3x text-primary mb-3"></i>
                                <h4 class="text-primary">Email</h4>
                                <a href="mailto:thekashitour@gmail.com" style="color: grey;">
                                    <p class="mb-0">thekashitour@gmail.com</p>
                                </a>
                            </div>

                            <div class="text-center">
                                <i class="fa fa-clock fa-3x text-primary"></i>
                                <h4 class="text-primary">
                                    <Address></Address>
                                </h4>
                                <p class="mb-0">Mon to Sun : 6 AM - 9 PM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1823192.8747179243!2d79.70906050975495!3d26.81056171881634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398e2e21df098c9b%3A0x72fdb60d0a4fbfaa!2sThe%20Kashi%20Tour!5e0!3m2!1sen!2sin!4v1719916185890!5m2!1sen!2sin"
                            class="mapcss" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
    @endsection
