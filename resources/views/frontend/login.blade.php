<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Login : Hotel R K Grand</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/frontend/img/titlelogo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Libraries Stylesheet -->
    <link href="assets/frontend/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/frontend/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/frontend/css/style.css" rel="stylesheet">
    <style>
        a {
            text-decoration: none;
            outline: none;
            color: #444;
        }

        a:hover {
            color: #444;
        }

        a:hover,
        a:focus,
        input,
        textarea {
            text-decoration: none;
            outline: none;
        }

        .form-02-main {
            background: linear-gradient(rgba(116, 114, 113, 0.8), rgba(116, 114, 113, 0.8)), url(assets/frontend/img/loginbackimg.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            z-index: 2;
            overflow: hidden;
            min-height: 690px;
        }

        ._lk_de {

            background-repeat: no-repeat;
            background-size: cover;
            padding: 90px 0px;
            position: relative;

        }

        .form-03-main {
            width: 500px;
            display: block;
            margin: 20px auto;
            padding: 45px 50px 45px;
            background: rgba(255, 255, 255, 0.6);
            border-radius: 6px;
            z-index: 9;
        }

        .loginlogo {
            width: 100px;
            height: 100px;
        }

        .form-group {
            padding: 10px 0px;
            display: inline-block;
            width: 100%;
            position: relative;
        }

        .form-group p {
            margin: 0px;
        }

        .form-control {
            min-height: 45px;
            -webkit-box-shadow: none;
            box-shadow: none;
            padding: 10px 15px;
            border-radius: 3px;
            border: 1px solid #ff6a00;
        }

        .checkbox {
            display: flex;
            justify-content: space-around;
        }



        ._btn_04 a {
            font-size: 15px;
            color: #fff;
        }

        .nm_lk {
            text-align: center;
        }

        @media screen and (max-width: 600px) {
            .form-03-main {
                width: 100%;
            }
        }
    </style>
</head>

<body>


    <section class="form-02-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="_lk_de">
                        <div class="form-03-main">
                            <div class="row">
                                <div class="col-12">
                                    <center><img src="assets/frontend/img/logo.png"></center>
                                    <p class="text-dark fw-bold text-center mt-3"><a href="/home">Home</a> / Login
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control _ge_de_ol" type="text"
                                    placeholder="Enter Email" required="" aria-required="true">
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" class="form-control _ge_de_ol" type="text"
                                    placeholder="Enter Password" required="" aria-required="true">
                            </div>

                            <div class="form-group">

                                <center> <a href="#">
                                        <div class="btn btn-primary mt-3 me-2 text-capitalize"
                                            style="border-radius: 35px;">Admin Login</div>
                                    </a></center>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/frontend/lib/wow/wow.min.js"></script>
    <script src="assets/frontend/lib/easing/easing.min.js"></script>
    <script src="assets/frontend/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/frontend/lib/counterup/counterup.min.js"></script>
    <script src="assets/frontend/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/frontend/lib/tempusdominus/js/moment.min.js"></script>
    <script src="assets/frontend/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="assets/frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/frontend/js/main.js"></script>
</body>

</html>
