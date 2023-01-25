<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('document_title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- css link -->
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">


    <!-- swiper link -->
    {{-- <link rel="stylesheet" href="tmp_home_swipe/css/swiper.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"> --}}

</head>

<body class="d-flex flex-column min-vh-100">

    {{-- BOOTSTRAP 5 --}}
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="logo" href=@yield('home_button')><span><img src="{{ asset("img/BerkelasLogo.png") }}"/></span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=@yield('home_button')>Home</a>
                    </li>

                    @yield('navbar')

                    <li class="nav-item">
                        <a class="nav-link" href="/AskAdmin">Customer Service</a>
                    </li>

                </ul>

                {{-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> --}}
            </div>
        </div>
    </nav>

    @yield('body')

    <section class="footer">

        <a href="#" class="logo"><span><img src="{{ asset("img/BerkelasLogo.png") }}"/></span></a>
        {{-- <a href="#" class="logo"><span><img src="img/BerkelasLogo.png"/></span></a> --}}
        <div class="box-container">
            <div class="box">
                <h3>BerKelas Inc.</h3>
                <a href="#"><i class="fas fa-store"></i>Brand : BerKelas</a>
                <a href="#"><i class="fas fa-calendar"></i>Year Founded : 2022</a>
                <a href="#"><i class="fas fa-address-book"></i>Business Registration No. : 123-45-67890 [Mail-order Business Registration Number]</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i>Tel : +62 12345678910</a>
                <a href="#"><i class="fas fa-envelope"></i>Email : hh@berkelasbusiness.com</a>
                <a href="#"><i class="fas fa-address-card"></i>Address : JL. Joglo Raya No. 8 - Central Jakarta Gedung Senatama, Mezzanine Floor</a>
            </div>

            <div class="box">
                <h3>Additional Information</h3>
                <a href="#"> <i class="fas fa-angle-right"></i>Privacy Policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i>Terms & Conditions</a>
                <a href="#"> <i class="fas fa-angle-right"></i>Community Guidelines</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#"> <i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"> <i class="fab fa-twitter"></i> Twitter</a>
            </div>

            <div class="box">
                <h3>.</h3>
                <a href="#"> <i class="fab fa-youtube"></i> Youtube</a>
                <a href="#"> <i class="fab fa-tiktok"></i> Tiktok</a>
            </div>
        </div>

        <div class="credit">
            Copyright <i class="fas fa-copyright"></i> BerKelas Educamp. All Rights Reserved. | created by <span>Abby Rasya, Andreas Werner, Shawn Tristan Viery & Felix Santosa</span>.
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
