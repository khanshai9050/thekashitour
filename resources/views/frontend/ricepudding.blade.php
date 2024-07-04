@extends('frontend.layouts.menu')
@section('content')
    <title>Rice Pudding : The Kashi Tour</title>
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Rice Pudding</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active text-white">Rice Pudding</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->
    <!--rice pudding start-->
    <div class="container-fluid py-2">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-7 ricepuddingborder">
                    <h6 class="text-primary fw-bold" style="font-size: 18px;">Rice Pudding ----------</h6>
                    <h2 class="mb-3 fw-bold">Delight in Our Signature Rice Pudding</h2>
                    <img src="assets/frontend/img/rice1.jpg" class="img-fluid w-100 rounded"
                        style="border:2px solid #ff6a00" />

                    <p class="mt-4">At The Kashi Tour, we believe that travel is not just about exploring new places but
                        also about
                        indulging in delightful culinary experiences. One of our most cherished offerings is our delicious
                        and creamy rice pudding, a treat that has become a favorite among our guests.</p>
                    <h5 class="fw-bold"> A Taste of Tradition</h5>
                    <p> Our rice pudding is more than just a dessert; it's a journey into the heart of Varanasi's
                        culinary heritage. Made with the finest ingredients, our rice pudding is prepared fresh daily to
                        ensure a rich, creamy texture and a perfect balance of flavors.</p>
                    <h5 class="fw-bold">Ingredients and Preparation</h5>
                    <p>We start with premium quality rice, cooked slowly to achieve a creamy consistency. Our recipe
                        includes:
                    <ul>
                        <li> Fresh whole milk</li>
                        <li> A touch of cream for extra richness</li>
                        <li>Pure cane sugar for the right amount of sweetness</li>
                        <li>A hint of vanilla and cinnamon for a warm, comforting flavor</li>

                    </ul>
                    Each batch is lovingly prepared by our skilled chefs, who follow a traditional recipe passed down
                    through generations.</p>
                </div>
                <div class="col-lg-5">
                    <h3 class="text-primary my-4 fw-bold">Guest Reviews for Rice Pudding</h3>
                    <h5> Sarah, USA</h5>
                    <p>“The best rice pudding I’ve ever had! Creamy, flavorful, and simply delightful.” </p>
                    <hr>
                    <h5> James, UK</h5>
                    <p>“A comforting bowl of rice pudding after a long day of exploring was just what I needed. Highly
                        recommended!”</p>
                    <hr>
                    <h5> Maria, Spain</h5>
                    <p> “Loved the traditional taste with a modern twist. The fresh fruit toppings were a great addition.”
                    </p>


                </div>
            </div>
        </div>
    </div>
    <!-- end rice pudding -->
@endsection
