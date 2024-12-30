<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('frontend/resources/Homenguyen.css') }}">
    <title>IT AUTO</title>
</head>

<body>

    <!-- Phần đầu của chương trình: search, login.. -->

    <div class="container-fluid p-0 bg-dark me-0">
        <div class="container-fluid p-0 bg-dark" style="position: relative;">

            <div
                class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start fixed-top bg-dark">

                <ul class="nav col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ps-5 pb-2">
                    <li><a href="#" class="nav-link p-0 px-2 text-secondary"></a><img
                            src="{{ asset('backend/img/logo.png') }}" alt="logo" width="85" height="80"></li>
                    <li><a href="#" class="nav-link px-2 res-hide text-white mt-3">Features</a></li>
                    <li><a href="#" class="nav-link px-2 res-hide text-white mt-3">Pricing</a></li>
                    <li><a href="#" class="nav-link px-2 res-hide text-white mt-3">FAQs</a></li>
                    <li><a href="#" class="nav-link px-2 res-hide text-white mt-3">About</a></li>
                </ul>

                <form class=" col-lg-auto mb-3 mb-lg-0 me-lg-3  ">
                    <input type="search" class="form-control form-control-dark res-hide" placeholder="Search..."
                        aria-label="Search">
                    <i class="fa-solid fa-magnifying-glass search-hide mx-5" width="80" height="80"></i>
                </form>

                <div class="text-end pe-5 col-lg-auto">

                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-dark container-fluid pb-3 pt-5 mt-5"
                aria-label="Tenth navbar example">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    @include('frontend.component.routernguyen')
                </div>
            </nav>
        </div>

        <!--carousel head home  -->

        <div class="container-fluid p-0">
            <div id="demo" class="carousel slide" data-bs-ride="carousel" style="width: 100%; height: 950px;">

                <!-- cham nho chay slide -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
                <!-- slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <video src="{{ asset('backend/img/video/video-nice.mp4') }}" autoplay loop muted
                            style="width:100%; height: 960px;"></video>
                        <div class="carousel-caption text-warning mb-4">
                            <video src="{{ asset('backend/img/welcome.mp4') }} " style="box-shadow: 0 0 4px 4px white;"
                                class="col-8 col-sm-4" height="auto" autoplay muted loop></video>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <video width="100%" height="960px" autoplay loop muted>
                            <source
                                src="https://www.bmw.com/content/dam/bmw/marketBMWCOM/bmw_com/categories/electric-future/hydrogen/hy-00-teaser-hd.mp4?fbclid=IwY2xjawGCF95leHRuA2FlbQIxMAABHQzAZx5YqChKPQ5R6z1z_2TW5v8eOKqHOWa7_RlDzVdpzbtscAO1JN87GA_aem_OTT8m31utmt19VRvIf9zoA"
                                type="video/mp4">
                        </video>

                    </div>
                    <div class="carousel-item">
                        <video width="100%" height="960px" autoplay loop muted>
                            <source
                                src="https://www.bmw.com/content/dam/bmw/marketBMWCOM/bmw_com/categories/digital-journey/i5/i5-00-teaser-hd.mp4"
                                type="video/mp4">
                        </video>

                    </div>
                </div>

                <!-- nut di chuyen trai phai -->
                <button class="carousel-control-prev " type="button" data-bs-target="#demo" data-bs-slide="up">
                    <span class="carousel-control-prev-icon "></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- end carousel head home  -->



        <!-- ảnh hr-logo -->
        <div class="container-fluid p-0">>
            <img src="{{ asset('backend/img/hr-dragon.png') }}" alt="icon Quantrimang.com" class="img-fluid"
                width="100%" height="100%">
        </div>
        <!-- end ảnh hr-logo  -->

        <!-- han hanh chao mung -->

        <div style="background-color: rgba(67, 66, 66, 0.4);">
            <div class="container-fluid pt-3 py-5 pb-2 ">
                <div class="text-white py-5 container-fluid">
                    <b><i>
                            <h2 class="d-flex justify-content-center">-Hãy đến với chúng tôi-</h2>
                        </i></b> <br>
                    <h4 class="d-flex justify-content-center">"Hân hạnh chào mừng bạn đến với IT Auto" </h4>
                </div>
                <div class="container-fluid ">
                    <div class="row pt-5 pb-3 ">
                        <div
                            class="col-md-4 border-secondary my-3 px-2 border-start d-flex flex-column justify-content-center hover-allcar py-5">
                            <div style="height: 67%;width: 100%;">
                                <img src="{{ asset('backend/img/mitsubisi-allcar.jpg') }} " alt="Bootstrap"
                                    class="mt-2 mx-1" style="width:100%">
                            </div>
                            <div class="container-fluid col-12 p-1 py-3">
                                <h2 class="text-white col-12 font-text text-center m-1 pb-3">- Tất cả các xe -</h2>
                                <div class="container justify-content-center d-flex">
                                    <button type="button"
                                        class="btn btn-light active btn-block d-flex justify-content-center col-md-3 btn-allcar"
                                        id="btn-popup-3">
                                        <h2><i class="fa-solid fa-cart-shopping text-black"></i></h2>
                                    </button>

                                    <!-- Popup allcars -->

                                    <div id="popup-3" class="hidden">
                                        <div class="popup-content">
                                            <div class="scroll-content">

                                                <div class="container-fluid p-0 mt-1 bg-dark border border-5 border-warning  "
                                                    style="overflow: hidden;">
                                                    <header class="pt-2 container-fluid text-white">
                                                        <div class="container">
                                                            <div
                                                                class="d-flex flex-wrap align-items-center justify-content-md-between ">


                                                                <ul
                                                                    class="nav col-12 col-lg-6 me-lg-auto mb-2 mb-md-0 align-items-center pb-2">
                                                                    <li class=" nav-item px-5 mx-5 text-secondary"><img
                                                                            src="{{ asset('backend/img/log.png') }}"
                                                                            alt="logo" height="80"
                                                                            width="80"> </li>
                                                                </ul>

                                                                <form class="col-12 col-lg-4 mb-3 mb-lg-0 me-lg-2">
                                                                    <input type="search"
                                                                        class="form-control form-control-dark"
                                                                        placeholder="Search..." aria-label="Search">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </header>


                                                    <!-- Danh sách xe -->

                                                    <div class="container-fluid bg-nenlopxe-2 pt-5">
                                                        <div class="d-flex justify-content-center ">
                                                            <h1
                                                                class="border border-secondary border-5 p-2 mb-3 text-black px-4 bg-tralvel bg-nenlopxe-3 text-black">
                                                                Khám phá tất cả các xe </h1>
                                                        </div>

                                                        <div class="row d-flex justify-content-center p-1 py-2">
                                                            <!-- danh sách -->
                                                            <div style="height: 470px; overflow: hidden; "
                                                                class="px-4 col-md-4 mt-2 pt-4 ">
                                                                <div class="card bg-cars text-white pt-1"
                                                                    style="background-image: url('{{ asset('backend/img/nenlopxe-5.jpg') }}');"
                                                                    style="background-image: url('{{ asset('backend/img/nenlopxe-5.jpg') }}');">
                                                                    <img class="card-img-top px-1 "
                                                                        src="{{ asset('backend/img/toyota-camry.jpg') }}"
                                                                        alt="Card image" height="230px"
                                                                        style="width: 100%;">
                                                                    <div class="control-list card-body ">
                                                                        <span
                                                                            class="card-title border-bottom  d-flex clear-fix">
                                                                            <h5 class="col-lg-6"> <i
                                                                                    class="fa-solid fa-check i-check pe-2"></i>TYT-camry
                                                                            </h5>
                                                                            <h6
                                                                                class="col-lg-6  text-end pt-1 text-price">
                                                                                1.220.00.000 <span class="px-1"
                                                                                    style="color: rgb(59, 185, 0);">
                                                                                    VND</span></h6>
                                                                        </span>
                                                                        <div class="endtrang">
                                                                            <p class="card-text "><i
                                                                                    class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                Công suất: 185/6000 (xăng), 134 mã
                                                                                lực<br>
                                                                                <i
                                                                                    class="fa-solid fa-list pe-1 p-1 float-start "></i>
                                                                                Control (Cruise Control) kết hợp 7 túi
                                                                                khí
                                                                            </p>
                                                                            <a href="{{ route('home.hangtrung') }}"
                                                                                class="btn clear-fix float-end btn-warning m-0 px-4">Xem</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="height: 470px; overflow: hidden; "
                                                                class="px-4 col-md-4 mt-2 pt-4 ">
                                                                <div class="card bg-cars text-white pt-1"
                                                                    style="background-image: url('{{ asset('backend/img/nenlopxe-5.jpg') }}');"
                                                                    style="background-image: url('{{ asset('backend/img/nenlopxe-5.jpg') }}');">
                                                                    <img class="card-img-top px-1 "
                                                                        src="{{ asset('backend/img/mazda6.png') }}"
                                                                        alt="Card image" height="230px"
                                                                        style="width: 100%;">
                                                                    <div class="control-list card-body ">
                                                                        <span
                                                                            class="card-title border-bottom  d-flex clear-fix">
                                                                            <h5 class="col-lg-6"> <i
                                                                                    class="fa-solid fa-check i-check pe-2"></i>Mazda
                                                                                6</h5>
                                                                            <h6
                                                                                class="col-lg-6  text-end pt-1 text-price">
                                                                                746.000.000 <span class="px-1"
                                                                                    style="color: rgb(59, 185, 0);">
                                                                                    VND</span></h6>
                                                                        </span>
                                                                        <div class="endtrang">
                                                                            <p class="card-text text-lg-star">
                                                                                <i
                                                                                    class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                Loại động cơ SkyActiv-G 2.0L<br>
                                                                                <i
                                                                                    class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                Công suất: 154/6000
                                                                            </p>
                                                                            <a href="{{ route('home.hangtrung') }}"
                                                                                class="btn clear-fix float-end btn-warning m-0 px-4">Xem</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="height: 470px; overflow: hidden; "
                                                                class="px-4 col-md-4 mt-2 pt-4 ">
                                                                <div class="card bg-cars text-white pt-1"
                                                                    style="background-image: url('{{ asset('backend/img/nenlopxe-5.jpg') }}');"style="background-image: url('{{ asset('backend/img/nenlopxe-5.jpg') }}');">
                                                                    <img class="card-img-top px-1 "
                                                                        src="{{ asset('backend/img/hyundai-sonata-1-52ed.jpg') }}"
                                                                        height="230px" style="width: 100%;">
                                                                    <div class="control-list card-body ">
                                                                        <span
                                                                            class="card-title border-bottom  d-flex clear-fix">
                                                                            <h5 class="col-lg-6"> <i
                                                                                    class="fa-solid fa-check i-check pe-2"></i>Hyudai
                                                                                Sonata </h5>
                                                                            <h6
                                                                                class="col-lg-6  text-end pt-1 text-price">
                                                                                1.021.000.000 <span class="px-1"
                                                                                    style="color: rgb(59, 185, 0);">
                                                                                    VND</span></h6>
                                                                        </span>
                                                                        <div class="endtrang">
                                                                            <p class="card-text"><i
                                                                                    class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                Động cơ: 2.4L,2.0L Twin Turbo<br>
                                                                                <i
                                                                                    class="fa-solid fa-list pe-1 p-1 float-start"></i>Công
                                                                                suất: 185-245 mã lực
                                                                            </p>
                                                                            <a href="{{ route('home.hangtrung') }}"
                                                                                class="btn clear-fix float-end btn-warning m-0 px-4">Xem</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- dòng 2 -->

                                                            <div class="row d-flex justify-content-center p-2 px-0 ">
                                                                <!-- danh sách xe dòng 2 -->
                                                                <div style="height: 470px; overflow: hidden; "
                                                                    class="px-4 col-md-4 mt-2 pt-3 ">
                                                                    <div class="card bg-cars text-white pt-1"
                                                                        style="background-image: url('{{ asset('backend/img/nenlopxe-5.jpg') }}');"
                                                                        style="background-image: url('{{ asset('backend/img/nenlopxe-5.jpg') }}');">
                                                                        <img class="card-img-top px-1 "
                                                                            src="{{ asset('backend/img/k5.jpg') }}"
                                                                            height="230px" style="width: 100%;">
                                                                        <div class="control-list card-body ">
                                                                            <span
                                                                                class="card-title border-bottom  d-flex clear-fix">
                                                                                <h5 class="col-lg-6"> <i
                                                                                        class="fa-solid fa-check i-check pe-2"></i>Kia
                                                                                    K5</h5>
                                                                                <h6
                                                                                    class="col-lg-6  text-end pt-1 text-price">
                                                                                    859.911.000 <span class="px-1"
                                                                                        style="color: rgb(59, 185, 0);">
                                                                                        VND</span></h6>
                                                                            </span>
                                                                            <div class="endtrang">
                                                                                <p class="card-text"><i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                    Công suất cực đại: 191 hp / 6,100
                                                                                    rpm<br>
                                                                                    <i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>Loại
                                                                                    động cơ: Theta III 2.5 GDI
                                                                                </p>
                                                                                <a href="{{ route('home.hangtrung') }}"
                                                                                    class="btn clear-fix float-end btn-warning m-0 px-4">Xem</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style="height: 470px; overflow: hidden; "
                                                                    class="px-4 col-md-4 mt-2 pt-4 ">
                                                                    <div class="card bg-cars text-white pt-1"
                                                                        style="background-image: url('{{ asset('backend/img/nenlopxe-5.jpg') }}');">
                                                                        <img class="card-img-top px-1 "
                                                                            src="{{ asset('backend/img/i30.jpg') }}"
                                                                            alt="Card image" height="230px"
                                                                            style="width: 100%;">
                                                                        <div class="control-list card-body ">
                                                                            <span
                                                                                class="card-title border-bottom  d-flex clear-fix">
                                                                                <h5 class="col-lg-6"> <i
                                                                                        class="fa-solid fa-check i-check pe-2"></i>Hyudai
                                                                                    I30 N</h5>
                                                                                <h6
                                                                                    class="col-lg-6  text-end pt-1 text-price">
                                                                                    891.000.000 <span class="px-1"
                                                                                        style="color: rgb(59, 185, 0);">
                                                                                        VND</span></h6>
                                                                            </span>
                                                                            <div class="endtrang">
                                                                                <p class="card-text"><i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                    Công suất: 271 mã lực tại 6.000
                                                                                    vòng/phút<br>
                                                                                    <i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>Tốc
                                                                                    độ tối đa: 250 km/h.
                                                                                </p>
                                                                                <a href="{{ route('home.hangtrung') }}"
                                                                                    class="btn clear-fix float-end btn-warning m-0 px-4">Xem</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style="height: 470px; overflow: hidden; "
                                                                    class="px-4 col-md-4 mt-2 pt-4 ">
                                                                    <div class="card bg-cars text-white pt-1"
                                                                        style="background-image: url('{{ asset('backend/img/nenlopxe-5.jpg') }}');">
                                                                        <img class="card-img-top px-1 "
                                                                            src="{{ asset('backend/img/volkwagen.jpg') }}"
                                                                            alt="Card image" height="230px"
                                                                            style="width: 100%;">
                                                                        <div class="control-list card-body ">
                                                                            <span
                                                                                class="card-title border-bottom  d-flex clear-fix">
                                                                                <h5 class="col-lg-6"> <i
                                                                                        class="fa-solid fa-check i-check pe-2"></i>Volkwagen
                                                                                    Golf</h5>
                                                                                <h6
                                                                                    class="col-lg-6  text-end pt-1 text-price">
                                                                                    8.500.000.000 <span class="px-1"
                                                                                        style="color: rgb(59, 185, 0);">
                                                                                        VND</span></h6>
                                                                            </span>
                                                                            <div class="endtrang">
                                                                                <p class="card-text"><i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                    Động cơ: 4 xi-lanh 2.0 lít tăng
                                                                                    áp<br>
                                                                                    <i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                    Công suất: 245 PS (242 HP / 180 kW)
                                                                                </p>
                                                                                <a href="{{ route('home.hangtrung') }}"
                                                                                    class="btn clear-fix float-end btn-warning m-0 px-4">Xem</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="row d-flex justify-content-center p-2 px-0 pt-3 ">
                                                                <!-- danh sách xe dòng 3   -->
                                                                <div style="height: 470px; overflow: hidden; "
                                                                    class="px-4 col-md-4 mt-2 pt-3 ">
                                                                    <div class="card bg-cars text-white pt-1"
                                                                        style="background-image: url('{{ asset('backend/img/nenlopxe-5.jpg') }}');">
                                                                        <img class="card-img-top px-1 "
                                                                            src="{{ asset('backend/img/civc.jpg') }}"
                                                                            alt="230px" style="width: 100%;">
                                                                        <div class="control-list card-body ">
                                                                            <span
                                                                                class="card-title border-bottom  d-flex clear-fix">
                                                                                <h5 class="col-lg-6"> <i
                                                                                        class="fa-solid fa-check i-check pe-2"></i>Honda
                                                                                    Civic:</h5>
                                                                                <h6
                                                                                    class="col-lg-6  text-end pt-1 text-price">
                                                                                    789.000.000<span class="px-1"
                                                                                        style="color: rgb(59, 185, 0);">
                                                                                        VND</span></h6>
                                                                            </span>
                                                                            <div class="endtrang">
                                                                                <p class="card-text"><i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                    Động cơ: 1.5L VTEC TURBO (G,
                                                                                    RS)/2.4L<br>
                                                                                    <i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                    Công suất cực đại lên tới 200 mã
                                                                                    lực.
                                                                                </p>
                                                                                <a href="{{ route('home.hangtrung') }}"
                                                                                    class="btn clear-fix float-end btn-warning m-0 px-4">Xem</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style="height: 470px; overflow: hidden; "
                                                                    class="px-4 col-md-4 mt-2 pt-3 ">
                                                                    <div class="card bg-cars text-white pt-1"
                                                                        style="background-image: url('{{ asset('backend/img/nenlopxe-5.jpg') }}');">
                                                                        <img class="card-img-top px-1 "
                                                                            src="{{ asset('backend/img/BMW M8.jpg') }}"
                                                                            alt="Card image" height="230px"
                                                                            style="width: 100%;">
                                                                        <div class="control-list card-body ">
                                                                            <span
                                                                                class="card-title border-bottom  d-flex clear-fix">
                                                                                <h5 class="col-lg-6"> <i
                                                                                        class="fa-solid fa-check i-check pe-2"></i>BMW
                                                                                    M8</h5>
                                                                                <h6
                                                                                    class="col-lg-6  text-end pt-1 text-price">
                                                                                    12.939.000.000 <span class="px-1"
                                                                                        style="color: rgb(59, 185, 0);">
                                                                                        VND</span></h6>
                                                                            </span>
                                                                            <div class="endtrang">
                                                                                <p class="card-text"><i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                    Động cơ: TwinPower Turbo V8, dung
                                                                                    tích 4,4 lít có công suất đạt 625 mã
                                                                                    lực<br>
                                                                                    <a href="{{ route('home.hangsang') }}"
                                                                                        class="btn clear-fix float-end btn-warning m-0 px-4">Xem</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style="height: 470px; overflow: hidden; "
                                                                    class="px-4 col-md-4 mt-2 pt-3 ">
                                                                    <div class="card bg-cars text-white pt-1"
                                                                        style="background-image: url('{{ asset('backend/img/nenlopxe-5.jpg') }}');">
                                                                        <img class="card-img-top px-1 "
                                                                            src="{{ asset('backend/img/benly.jpg') }}"
                                                                            height="230px" style="width: 100%;">
                                                                        <div class="control-list card-body ">
                                                                            <span
                                                                                class="card-title border-bottom  d-flex clear-fix">
                                                                                <h5 class="col-lg-6"> <i
                                                                                        class="fa-solid fa-check i-check pe-2"></i>McLaren
                                                                                </h5>
                                                                                <h6
                                                                                    class="col-lg-6  text-end pt-1 text-price">
                                                                                    19.548.000.000 <span class="px-1"
                                                                                        style="color: rgb(59, 185, 0);">
                                                                                        VND</span></h6>
                                                                            </span>
                                                                            <div class="endtrang">
                                                                                <p class="card-text"><i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                    Động cơ: 4.0 V8<br>
                                                                                    <i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                    Công suất: 542 mã lực
                                                                                </p>
                                                                                <a href="{{ route('home.hangsang') }}"
                                                                                    class="btn clear-fix float-end btn-warning m-0 px-4">Xem</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="row d-flex justify-content-center p-2 px-0 pt-3 ">
                                                                <!-- danh sách xe dòng 4   -->
                                                                <div style="height: 470px; overflow: hidden; "
                                                                    class="px-4 col-md-4 mt-2 pt-4 ">
                                                                    <div class="card bg-cars text-white pt-1"
                                                                        style="background-image: url('{{ asset('backend/img/nenlopxe-5.jpg') }}');">
                                                                        <img class="card-img-top px-1 "
                                                                            src="{{ asset('backend/img/gls-1.jpg') }}"
                                                                            alt="Card image" height="230px"
                                                                            style="width: 100%;">
                                                                        <div class="control-list card-body ">
                                                                            <span
                                                                                class="card-title border-bottom  d-flex clear-fix">
                                                                                <h5 class="col-lg-6"> <i
                                                                                        class="fa-solid fa-check i-check pe-2"></i>GLS
                                                                                    SUV</h5>
                                                                                <h6
                                                                                    class="col-lg-6  text-end pt-1 text-price">
                                                                                    5.389.000.000 <span class="px-1"
                                                                                        style="color: rgb(59, 185, 0);">
                                                                                        VND</span></h6>
                                                                            </span>
                                                                            <div class="endtrang">
                                                                                <p class="card-text"><i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                    Công suất: 367 mã lực<br>
                                                                                    <i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                    Tiêu thụ nhiên liệu: 10.97l/100km
                                                                                </p>
                                                                                <a href="{{ route('home.hangsang') }}"
                                                                                    class="btn clear-fix float-end btn-warning m-0 px-4">Xem</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style="height: 470px; overflow: hidden; "
                                                                    class="px-4 col-md-4 mt-2 pt-4 ">
                                                                    <div class="card bg-cars text-white pt-1"
                                                                        style="background-image: url('{{ asset('backend/img/nenlopxe-5.jpg') }}');">
                                                                        <img class="card-img-top px-1 "
                                                                            src="{{ asset('backend/img/lexus.jpg') }}"
                                                                            alt="Card image" height="230px"
                                                                            style="width: 100%;">
                                                                        <div class="control-list card-body ">
                                                                            <span
                                                                                class="card-title border-bottom  d-flex clear-fix">
                                                                                <h5 class="col-lg-6"> <i
                                                                                        class="fa-solid fa-check i-check pe-2"></i>Lexus
                                                                                    LX</h5>
                                                                                <h6
                                                                                    class="col-lg-6  text-end pt-1 text-price">
                                                                                    8.500.000.000 <span class="px-1"
                                                                                        style="color: rgb(59, 185, 0);">
                                                                                        VND</span></h6>
                                                                            </span>
                                                                            <div class="endtrang">
                                                                                <p class="card-text"><i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                    Công suất: 409 mã lực<br>
                                                                                    <i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                    Tăng tốc từ 0->100km/h: 7s
                                                                                </p>
                                                                                <a href="{{ route('home.hangsang') }}"
                                                                                    class="btn clear-fix float-end btn-warning m-0 px-4">Xem</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style="height: 470px; overflow: hidden; "
                                                                    class="px-4 col-md-4 mt-2 pt-4 ">
                                                                    <div class="card bg-cars text-white pt-1"
                                                                        style="background-image: url('{{ asset('backend/img/nenlopxe-5.jpg') }}');">
                                                                        <img class="card-img-top px-1 "
                                                                            src="{{ asset('backend/img/audi Q8.png') }} "
                                                                            alt="Card image" height="230px"
                                                                            style="width: 100%;">
                                                                        <div class="control-list card-body ">
                                                                            <span
                                                                                class="card-title border-bottom  d-flex clear-fix">
                                                                                <h5 class="col-lg-6"> <i
                                                                                        class="fa-solid fa-check i-check pe-2"></i>Audi
                                                                                    Q8</h5>
                                                                                <h6
                                                                                    class="col-lg-6  text-end pt-1 text-price">
                                                                                    4.200.000.000 <span class="px-1"
                                                                                        style="color: rgb(59, 185, 0);">
                                                                                        VND</span></h6>
                                                                            </span>
                                                                            <div class="endtrang">
                                                                                <p class="card-text"><i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                    Động cơ: 250 kW (340 mã lực)<br>
                                                                                    <i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                    Tốc độ tối đa: 250 km/giờ
                                                                                </p>
                                                                                <a href="{{ route('home.hangsang') }}"
                                                                                    class="btn clear-fix float-end btn-warning m-0 px-4">Xem</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="row d-flex justify-content-center p-2 px-0 pt-3 ">
                                                                <!-- danh sách xe dòng 4 -->
                                                                <div style="height: 470px; overflow: hidden; "
                                                                    class="px-4 col-md-4 mt-2 pt-3 ">
                                                                    <div class="card bg-cars text-white pt-1"
                                                                        style="background-image: url('{{ asset('backend/img/nenlopxe-5.jpg') }}');">
                                                                        <img class="card-img-top px-1 "
                                                                            src={{ asset('backend/img/Cadilac.jpg') }}
                                                                            style="width: 100%;height:230px">
                                                                        <div class="control-list card-body ">
                                                                            <span
                                                                                class="card-title border-bottom  d-flex clear-fix">
                                                                                <h5 class="col-lg-6"> <i
                                                                                        class="fa-solid fa-check i-check pe-2"></i>Cadillac
                                                                                    Escalade:</h5>
                                                                                <h6
                                                                                    class="col-lg-6  text-end pt-1 text-price">
                                                                                    8.982.773.400<span class="px-1"
                                                                                        style="color: rgb(59, 185, 0);">
                                                                                        VND</span></h6>
                                                                            </span>
                                                                            <div class="endtrang">
                                                                                <p class="card-text"><i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                    Động cơ: V8 6.2L<br>
                                                                                    <i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                    Công suất: 420 mã lực. Mô men xoắn:
                                                                                    623 Nm.
                                                                                </p>
                                                                                <a href="{{ route('home.hangsang') }}"
                                                                                    class="btn clear-fix float-end btn-warning m-0 px-4">Xem</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div style="height: 470px; overflow: hidden; "
                                                                    class="px-4 col-md-4 mt-2 pt-3 ">
                                                                    <div class="card bg-cars text-white pt-1"
                                                                        style="background-image: url('{{ asset('backend/img/nenlopxe-5.jpg') }}');">
                                                                        <img class="card-img-top px-1 "
                                                                            src="{{ asset('backend/img/subaruuu.jpg') }}"
                                                                            alt="Card image" height="230px"
                                                                            style="width: 100%;">
                                                                        <div class="control-list card-body ">
                                                                            <span
                                                                                class="card-title border-bottom  d-flex clear-fix">
                                                                                <h5 class="col-lg-6"> <i
                                                                                        class="fa-solid fa-check i-check pe-2 "></i>Subaru
                                                                                    Crosstrek</h5>
                                                                                <h6
                                                                                    class="col-lg-6  text-end pt-1 text-price">
                                                                                    1.500.000.000 <span class="px-1"
                                                                                        style="color: rgb(59, 185, 0);">
                                                                                        VND</span></h6>
                                                                            </span>
                                                                            <div class="endtrang">
                                                                                <p class="card-text"><i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                    Động cơ: 2.0L hút khí tự nhiên<br>
                                                                                    <a href="{{ route('home.sapramat') }}"
                                                                                        class="btn clear-fix float-end btn-warning m-0 px-4">Xem</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style="height: 470px; overflow: hidden; "
                                                                    class="px-4 col-md-4 mt-2 pt-3 ">
                                                                    <div class="card bg-cars text-white pt-1"
                                                                        style="background-image: url('{{ asset('backend/img/nenlopxe-5.jpg') }}');">
                                                                        <img class="card-img-top px-1 "
                                                                            src="{{ asset('backend/img/Hyundai Tucson.jpg') }}"
                                                                            alt="240px" height="230px"
                                                                            style="width: 100%;">
                                                                        <div class="control-list card-body ">
                                                                            <span
                                                                                class="card-title border-bottom  d-flex clear-fix">
                                                                                <h5 class="col-lg-6"> <i
                                                                                        class="fa-solid fa-check i-check pe-2"></i>Hyundai
                                                                                    Tucson</h5>
                                                                                <h6
                                                                                    class="col-lg-6  text-end pt-1 text-price">
                                                                                    800.000.000 <span class="px-1"
                                                                                        style="color: rgb(59, 185, 0);">VND</span>
                                                                                </h6>
                                                                            </span>
                                                                            <div class="endtrang">
                                                                                <p class="card-text"><i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                    Động cơ: 2.0L<br>
                                                                                    <i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                    Công suất: 180 mã lực
                                                                                </p>
                                                                                <a href="{{ route('home.sapramat') }}"
                                                                                    class="btn clear-fix float-end btn-warning m-0 px-4">Xem</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>

                                                            <div
                                                                class="row d-flex justify-content-center p-2 px-0 pt-3 ">
                                                                <!-- danh sách xe dòng 5 -->
                                                                <div style="height: 470px; overflow: hidden; "
                                                                    class="px-4 col-md-4 mt-2 pt-4 ">
                                                                    <div class="card bg-cars text-white pt-1"
                                                                        style="background-image: url('{{ asset('backend/img/nenlopxe-5.jpg') }}');">
                                                                        <img class="card-img-top px-1 "
                                                                            src="{{ asset('backend/img/honda-crv-2024-gia-ban-moi-nhat-–-Danh-gia-xe-–-hinh-anh-4.jpg') }}"
                                                                            alt="Card image" height="230px"
                                                                            style="width: 100%;">
                                                                        <div class="control-list card-body ">
                                                                            <span
                                                                                class="card-title border-bottom  d-flex clear-fix">
                                                                                <h5 class="col-lg-6"> <i
                                                                                        class="fa-solid fa-check i-check pe-2"></i>Honda
                                                                                    CR-V 2025</h5>
                                                                                <h6
                                                                                    class="col-lg-6  text-end pt-1 text-price">
                                                                                    1.029.000.000 <span class="px-1"
                                                                                        style="color: rgb(59, 185, 0);">
                                                                                        VND</span></h6>
                                                                            </span>
                                                                            <div class="endtrang">
                                                                                <p class="card-text"><i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                    Hỗ trợ lái xe tự động cấp độ 2<br>
                                                                                </p>
                                                                                <a href="{{ route('home.sapramat') }}"
                                                                                    class="btn clear-fix float-end btn-warning m-0 px-4">Xem</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style="height: 470px; overflow: hidden; "
                                                                    class="px-4 col-md-4 mt-2 pt-4 ">
                                                                    <div class="card bg-cars text-white pt-1"
                                                                        style="background-image: url('{{ asset('backend/img/nenlopxe-5.jpg') }}');">
                                                                        <img class="card-img-top px-1 "
                                                                            src="{{ asset('backend/img/Ford-Ranger-2025.jpeg') }}"
                                                                            height="230px" style="width: 100%;">
                                                                        <div class="control-list card-body ">
                                                                            <span
                                                                                class="card-title border-bottom  d-flex clear-fix">
                                                                                <h5 class="col-lg-6"> <i
                                                                                        class="fa-solid fa-check i-check pe-2"></i>
                                                                                    Ranger 2025</h5>
                                                                                <h6
                                                                                    class="col-lg-6  text-end pt-1 text-price">
                                                                                    <span class="px-1"
                                                                                        style="color: rgb(59, 185, 0);">Chưa
                                                                                        có thông tin</span>
                                                                                </h6>
                                                                            </span>
                                                                            <div class="endtrang">
                                                                                <p class="card-text"><i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                    Áp dụng công nghệ hiện đại như hệ
                                                                                    thống lái tự động và hỗ trợ đỗ xe
                                                                                    tiên tiến
                                                                                </p>
                                                                                <a href="{{ route('home.sapramat') }}"
                                                                                    class="btn clear-fix float-end btn-warning m-0 px-4">Xem</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style="height: 470px; overflow: hidden; "
                                                                    class="px-4 col-md-4 mt-2 pt-4 ">
                                                                    <div class="card bg-cars text-white pt-1"
                                                                        style="background-image: url('{{ asset('backend/img/nenlopxe-5.jpg') }}');">
                                                                        <img class="card-img-top px-1 "
                                                                            src="{{ asset('backend/img/ix3.jpg') }} "
                                                                            alt="Card image" height="230px"
                                                                            style="width: 100%;">
                                                                        <div class="control-list card-body ">
                                                                            <span
                                                                                class="card-title border-bottom  d-flex clear-fix">
                                                                                <h5 class="col-lg-6"> <i
                                                                                        class="fa-solid fa-check i-check pe-2"></i>BMW
                                                                                    iX3</h5>
                                                                                <h6
                                                                                    class="col-lg-6  text-end pt-1 text-price">
                                                                                    <span class="px-1"
                                                                                        style="color: rgb(59, 185, 0);">chưa
                                                                                        có thông tin</span>
                                                                                </h6>
                                                                            </span>
                                                                            <div class="endtrang">
                                                                                <p class="card-text"><i
                                                                                        class="fa-solid fa-list pe-1 p-1 float-start"></i>
                                                                                    Công nghệ kết nối thông minh và hệ
                                                                                    thống lái xe tự động cấp độ 2<br>
                                                                                </p>
                                                                                <a href="{{ route('home.sapramat') }}"
                                                                                    class="btn clear-fix float-end btn-warning m-0 px-4">Xem</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <button class="close-3 btn  btn-warning mt-3 p-2 px-3"> Close </button>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div
                            class="col-md-4 border-secondary my-3 px-2 border-start d-flex flex-column justify-content-center hover-allcar py-5">
                            <div style="height: 67%;width: 100%;">
                                <img src="{{ asset('backend/img/lan1.jpg') }}" alt="Bootstrap" class="mt-2 mx-1"
                                    style="width:100% ">
                            </div>

                            <div class="container-fluid col-12 p-1 py-3">
                                <h2 class="text-white col-12 font-text text-center m-1 pb-3">- Sự kiện -</h2>
                                <div class="container justify-content-center d-flex">
                                    <button type="button"
                                        class="btn btn-light active btn-block d-flex justify-content-center  col-md-3 btn-allcar "
                                        id="btn-popup-2">
                                        <h2><i class="fa-duotone fa-solid fa-play text-black"></i></h2>
                                    </button>


                                    <!-- popup event  -->


                                    <div id="popup-2" class="hidden">
                                        <div class="popup-content">
                                            <div class="scroll-content">

                                                <div class="container-fluid p-0 border border-5 border-warning  bg-nenlopxe "
                                                    style="overflow: hidden; background-image: url('{{ asset('backend/img/nenlopxe-6.png') }}');">
                                                    <div data-bs-spy="scroll" data-bs-target=".navbar"
                                                        data-bs-offset="50" style="position: relative;">
                                                        <nav class="navbar navbar-expand-sm bg-dark navbar-dark  ">
                                                            <div class="container-fluid justify-content-md-between">
                                                                <ul
                                                                    class="navbar-nav  align-items-center col-12 col-md-9 me-lg-auto mb-md-0 px-3">
                                                                    <li class="nav-item col-md-3  mx-3">
                                                                        <h5><a class="nav-link px-3 "
                                                                                href="#section1">Khai Trương</a></h5>
                                                                    </li>
                                                                    <link rel="stylesheet" href="home.css">
                                                                    <li class="nav-item col-md-3  mx-3">
                                                                        <h5>
                                                                            <a class="nav-link px-3 "
                                                                                href="#section2">Hoạt động</a>
                                                                        </h5>
                                                                    </li>
                                                                    <li class="nav-item col-md-3  mx-3">
                                                                        <h5>
                                                                            <a class="nav-link px-3 "
                                                                                href="#section3">Ảnh từ sự kiện </a>
                                                                        </h5>
                                                                    </li>
                                                                </ul>
                                                                <div class="col-12 col-md-3 mb-1 mb-lg-0 me-lg-2 ">
                                                                    <div>
                                                                        <img src="{{ asset('backend/img/logo.png') }}"
                                                                            alt="logo" height="70"
                                                                            width="70"
                                                                            class="float-end clear-fix me-md-5">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </nav>

                                                        <div id="section1" class="pt-1  ">
                                                            <div class="d-flex justify-content-center mt-3">
                                                                <h1
                                                                    class="border border-secondary border-5 p-2 text-black px-4 bg-nenlopxe-3 bg-tralvel">
                                                                    It Auto Events </h1>
                                                            </div>
                                                            <div class="container pt-3  ">
                                                                <div class="d-flex justify-content-md-around mb-3">
                                                                    <h2 class="text-center clear-fix text-black">
                                                                        Khai trương It Auto
                                                                    </h2>
                                                                    <h5 class="align-items-center pt-2"><small
                                                                            class="text-muted ps-2 text-end ">Diễn ra
                                                                            ngày: 20/11/2024.</small></h5>
                                                                </div>
                                                                <div class="row featurette align-items-center ">
                                                                    <div class="col-md-6 px-4">

                                                                        <p class="lead">Lễ khai trương đại lý <b
                                                                                class=" px-2 font-weight-lighter "> It
                                                                                Auto</b> được tổ chức tại 801 Quốc lộ
                                                                            13, P. Hiệp Bình Phước, Thủ Đức, TP HCM.
                                                                            Phan Đăng đảm nhận nhiệm vụ cung cấp tất cả
                                                                            các dịch vụ trong chương trình lễ khai
                                                                            trương. Từ khâu setup, chuẩn bị âm thanh -
                                                                            ánh sáng, sân khấu, kịch bản; MC; PG; cổng
                                                                            chào… mọi thứ đều được chuẩn bị một cách
                                                                            chỉn chu, hoàn hảo nhất.
                                                                            Kịch bản tổ chức lễ khai trương được biên
                                                                            soạn phù hợp với nhu cầu khách hàng nhưng
                                                                            không kém phần sang trọng; cùng với sự dẫn
                                                                            dắt tinh tế của MC Thu Nga đã tạo nên sự
                                                                            thành công tốt đẹp đến chương trình.</p>
                                                                    </div>
                                                                    <div class="col-md-6 pe-4">
                                                                        <img src="{{ asset('backend/img/hoa chúc mừng khai trương.jpg') }}"
                                                                            alt="Description of image"
                                                                            class="img-fluid image-shadow "
                                                                            style="max-height: 600px; width: auto;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="section2" class="pt-1 ">
                                                            <div class="container pt-5 pb-4  ">
                                                                <div class="d-flex justify-content-md-around mb-3">
                                                                    <h2 class="text-center clear-fix text-black">
                                                                        <b>Nhiều hoạt động thú vị trong buổi lễ </b>
                                                                    </h2>
                                                                </div>
                                                                <div class="row featurette align-items-center ">
                                                                    <div class="col-md-6 pe-4">
                                                                    </div>
                                                                    <div class="col-md-6 px-4">

                                                                        <p class="lead">Vào lúc 7h sáng, đến giờ
                                                                            đẹp<b class=" px-2 font-weight-lighter ">
                                                                                It Auto</b> đã khai mạc bằng tiết mục
                                                                            không thể thiếu trong phong tục khai trương
                                                                            của Việt Nam chính là múa Lân Sư Rồng. Đây
                                                                            được xem là nghi thức mang lại sự thịnh
                                                                            vượng, may mắn trong ngày khai trương trọng
                                                                            đại. Hình ảnh uốn lượn của Lân Sư Rồng mang
                                                                            đến một khởi đầu thuận lợi và hy vọng những
                                                                            điều tốt đẹp, viên mãn và phát đạt. Tiết mục
                                                                            đã mang đến không khí náo nhiệt cho buổi lễ,
                                                                            thu hút đông đảo khách hàng đến tham dự.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="section3" class="pt-1  ">
                                                            <div class="container pt-5  ">
                                                                <div class="d-flex justify-content-md-around mb-3">
                                                                    <h1
                                                                        class="text-center clear-fix pb-3  text-success">
                                                                        <b>Một số hình ảnh từ lễ khai trương</b>
                                                                    </h1>
                                                                </div>
                                                                <div class="row featurette align-items-center ">
                                                                    <div class="col-md-6 px-4">
                                                                        <p class="lead mb-5 pb-5">Những ảnh được chụp
                                                                            lại sự kiện khai trương showroom <b
                                                                                class=" px-2 font-weight-lighter "> It
                                                                                Auto</b>. Được trang trí đẹp, bắt mắt.
                                                                            Mọi thắc mắc của quý vị về việc mua xe, đặt,
                                                                            lái thử hãy liên hệ vào số hotline của
                                                                            showroom: <b>0934846450 - 0949103246</b> .
                                                                        </p>
                                                                        <img src="{{ asset('backend/img/more-2.jpg') }}"
                                                                            alt="Description of image"
                                                                            class="img-fluid image-shadow "
                                                                            style="max-height: 600px; width: auto;">
                                                                    </div>
                                                                    <div class="col-md-6 pe-4">
                                                                        <img src="{{ asset('backend/img/xetrungbay.jpg') }}"
                                                                            alt="Description of image"
                                                                            class="img-fluid image-shadow "
                                                                            style="max-height: 600px; width: auto;">
                                                                        <img src="{{ asset('backend/img/xetrungbay-2.jpg') }}"
                                                                            alt="Description of image"
                                                                            class="img-fluid image-shadow  my-4"
                                                                            style="max-height: 600px; width: auto;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <button class="close-2 btn btn-warning mt-3 p-2 px-3"> Close </button>
                                        </div>
                                    </div>

                                    <!-- end pop event -->

                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-4 border-secondary my-3 px-2 border-start d-flex flex-column justify-content-center hover-allcar py-5 ">
                            <div style="height: 67%;width: 100%;">
                                <img src="{{ asset('backend/img/trian.png') }}" alt="Bootstrap" class="mt-2 mx-1"
                                    style="width:100%">
                            </div>

                            <div class="container-fluid col-12 p-1 py-3">
                                <h2 class="text-white col-12 font-text text-center m-1 pb-3">- Tri ân -</h2>
                                <div class="container justify-content-center d-flex">
                                    <button type="button"
                                        class="btn btn-light active btn-block d-flex justify-content-center  col-md-3 btn-allcar "
                                        id="btn-popup">
                                        <h2><i class="fa-duotone fa-solid fa-play text-black"></i></h2>
                                    </button>
                                </div>


                                <!-- poptrian -->

                                <div id="popup" class="hidden">
                                    <div class="popup-content">
                                        <div class="scroll-content">
                                            <div class="container-fluid p-0 border border-5 border-warning col-12 "
                                                style="overflow: hidden; background-image: url('{{ asset('backend/img/nenlopxe-6.png') }}');">
                                                <div data-bs-spy="scroll" data-bs-target=".navbar"
                                                    data-bs-offset="50" style="position: relative;">
                                                    <nav class="navbar navbar-expand-sm bg-dark navbar-dark  ">
                                                        <div class="container-fluid justify-content-md-between">
                                                            <ul
                                                                class="navbar-nav  align-items-center col-12 col-md-9 me-lg-auto mb-md-0 px-3">
                                                                <li class="nav-item col-md-3  mx-3">
                                                                    <h5><a class="nav-link px-3 " href="#section1">Lễ
                                                                            bàn giao xe</a></h5>
                                                                </li>
                                                                <li class="nav-item col-md-3  mx-3">
                                                                    <h5>
                                                                        <a class="nav-link px-3 " href="#section2">Một
                                                                            số hình ảnh</a>
                                                                    </h5>
                                                                </li>
                                                            </ul>
                                                            <div class="col-12 col-md-3 mb-1 mb-lg-0 me-lg-2 ">
                                                                <div>
                                                                    <img src="{{ asset('backend/img/logo.png') }}"
                                                                        alt="logo" height="70" width="70"
                                                                        class="float-end clear-fix me-md-5">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </nav>

                                                    <div id="section1" class="pt-1 bg-nenlopxe col-12">
                                                        <div class="d-flex justify-content-center mt-3">
                                                            <h1
                                                                class="border border-secondary border-5 p-2 px-4 bg-tralvel bg-nenlopxe-3">
                                                                It Auto Tri Ân </h1>
                                                        </div>
                                                        <div class="container pt-3  ">
                                                            <div class="d-flex justify-content-md-around mb-3">
                                                                <h2 class="text-center clear-fix text-black">
                                                                    <b>Lễ bàn giao xe</b>
                                                                </h2>
                                                                <h6 class="align-items-center pt-2"><small
                                                                        class="text-muted ps-2  text-end ">các hình ảnh
                                                                        được trích xuất từ khách hàng của
                                                                        showroom</small></h6>
                                                            </div>
                                                            <div class="row featurette align-items-center ">
                                                                <div class=" px-4">

                                                                    <p class="lead">Đại lí <b
                                                                            class=" px-2 font-weight-lighter text-danger ">
                                                                            It Auto</b> với phương châm <i>“Tôn trọng
                                                                            con người”</i> và nền tảng <i>“Niềm vui”</i>
                                                                        làm kim chỉ cho sự phát triển, nỗ lực mang đến
                                                                        những trải nghiệm tiêu dùng hoàn hảo với chất
                                                                        lượng phục vụ tốt nhất đến từng khách hàng, luôn
                                                                        hướng đến những giá trị tốt đẹp và thuần túy
                                                                        nhất trong hoạt động kinh doanh: <br>
                                                                        + Niềm vui Mua hàng: Đạt được thông qua việc
                                                                        cung cấp những sản phẩm, dịch vụ đáp ứng vượt
                                                                        mong đợi và nhu cầu của khách hàng. <br>
                                                                        + Niềm vui Bán hàng: Đạt được khi mà những nhân
                                                                        viên cung cấp sản phẩm, dịch vụ của It Auto luôn
                                                                        xây dựng và phát triển mối quan hệ với khách
                                                                        hàng dựa trên sự tin tưởng. <br>
                                                                        + Niềm vui Sáng tạo: Đạt được khi mà các nhân
                                                                        viên và đại lý tham gia vào quá trình sản xuất
                                                                        ra sản phẩm thấy được niềm vui của khách hàng có
                                                                        được do nỗ lực của mình. <br>
                                                                        - Sự tin tưởng, hài lòng và niềm vui của khách
                                                                        hàng khi trải nghiệm các dịch vụ tại <b
                                                                            class=" px-2 font-weight-lighter text-danger ">
                                                                            It Auto</b> chính là niềm động lực lớn lao,
                                                                        nguồn động viên to lớn trên bước đường phát
                                                                        triển của chúng tôi. Nhằm nâng cao hơn nữa chất
                                                                        lượng phục vụ, hiện nay, chúng tôi đã trang
                                                                        hoàng lại chỗ giao xe mới cho khách hàng để Quý
                                                                        khách tận hưởng những giây phút nhận xe mới một
                                                                        cách trọn vẹn nhất. <br>

                                                                        <b
                                                                            class=" px-2 font-weight-lighter text-danger ">-
                                                                            It Auto</b> xin chân thành cảm ơn Quý khách
                                                                        hàng đã luôn tin tưởng và lựa chọn sản phẩm xe ô
                                                                        tô từ showroom. <b
                                                                            class=" px-2 font-weight-lighter text-danger ">Showroom
                                                                            Oto It Auto</b>hân hạnh được phục phụ Quý
                                                                        khách, kính chúc Quý khách hàng sức khỏe dồi
                                                                        dào, làm ăn phát tài và có nhiều chuyến trải
                                                                        nghiệm tuyệt vời trên chiếc xe mình đã chọn làm
                                                                        bạn đồng hành !!!
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="section2" class="pt-1 bg-nenlopxe ">
                                                        <div class="container pt-3  ">
                                                            <div class="row featurette align-items-center ">
                                                                <div class="col-md-6 pe-4">
                                                                    <img src="{{ asset('backend/img/chucmung.jpg') }}"
                                                                        alt="Description of image"
                                                                        class="img-fluid image-shadow "
                                                                        style="max-height: 600px; width: auto;">
                                                                </div>
                                                                <div class="col-md-6 px-4">

                                                                    <img src="{{ asset('backend/img/bangiaoxe-5.jpg') }}"
                                                                        alt="Description of image"
                                                                        class="img-fluid image-shadow "
                                                                        style="max-height: 600px; width: auto;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="section3" class="pt-1 bg-nenlopxe ">
                                                        <div class="container pt-5  ">
                                                            <div class="d-flex justify-content-md-around mb-3">
                                                                <h2 class="text-center clear-fix text-danger">
                                                                    Một số hình ảnh từ lễ bàn giao xe
                                                                </h2>
                                                            </div>
                                                            <div class="row featurette align-items-center ">
                                                                <div class="col-md-6 px-4">
                                                                    <img src="{{ asset('backend/img/bangiaoxe-6.jpg') }}"
                                                                        alt="Description of image"
                                                                        class="img-fluid image-shadow "
                                                                        style="max-height: 600px; width: auto;">
                                                                </div>
                                                                <div class="col-md-6 pe-4">
                                                                    <img src="{{ asset('backend/img/bangiaoxe-2.jpg') }}"
                                                                        alt="Description of image"
                                                                        class="img-fluid image-shadow "
                                                                        style="max-height: 600px; width: auto;">
                                                                    <img src="{{ asset('backend/img/bangiaoxe-1.jpg') }}"
                                                                        alt="Description of image"
                                                                        class="img-fluid image-shadow  my-4"
                                                                        style="max-height: 600px; width: auto;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="close btn btn-warning mt-3 p-2 px-3"> Close </button>
                                    </div>
                                </div>

                                <!-- endtrian -->

                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid px-0 p-5 text-center mt-3 d-flex justify-content-center"
                    style="background-color: rgba(67, 66, 66, 0);">

                    <div class="container-fluid col-11 px-0 p-5 pb-4 text-center mt-3 d-flex justify-content-center"
                        style="background-image: url('{{ asset('backend/img/lambo-bac.webp') }}');">

                        <div class="col-10 text-white border py-4 pb-1 px-3"
                            style="background-color: rgba(21, 21, 21, 0.867);">

                            <h1 style="text-shadow: 0px 2px 1px rgb(0, 0, 0);" class="p-4"> Thông tin phụ</h1> <br>
                            <section class="section blog container-fluid px-2" id="blog">
                                <div class="container">
                                    <ul class="blog-list has-scrollbar">

                                        <li>
                                            <div class="blog-card">

                                                <figure class="card-banner">

                                                    <a href="#">
                                                        <img src="{{ asset('backend/img/hạng sang.png') }}"
                                                            loading="lazy" class="w-100">
                                                    </a>

                                                    <a href="hangsang.html" class="btn-1 card-badge">View</a>

                                                </figure>

                                                <div class="card-content">

                                                    <h3 class="h3 card-title">
                                                        <a href="#">'Khám phá hạng sang của It Auto'</a>
                                                    </h3>

                                                    <div class="card-meta">

                                                        <div class="publish-date">
                                                            <ion-icon name="time-outline"></ion-icon>

                                                            <time datetime="2022-01-14">January 9, 2024</time>
                                                        </div>

                                                        <div class="comments">
                                                            <i class="fa-solid fa-crosshairs"></i>

                                                            <data value="114">311</data>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </li>

                                        <li>
                                            <div class="blog-card">

                                                <figure class="card-banner">

                                                    <a href="#">
                                                        <img src="{{ asset('backend/img/mec-hiem.jpg') }}"
                                                            loading="lazy" class="w-100">
                                                    </a>

                                                    <a href="https://m.autopro.com.vn/mercedes-g63-phien-ban-v12-cuc-hiem-len-san-dau-gia-177241128103447007.chn"
                                                        class="btn-1 card-badge">View</a>

                                                </figure>

                                                <div class="card-content">

                                                    <h3 class="h3 card-title">
                                                        <a href="#">Mercedes G63 phiên bản V12 cực hiếm lên sàn
                                                            đấu giá</a>
                                                    </h3>

                                                    <div class="card-meta">

                                                        <div class="publish-date">
                                                            <ion-icon name="time-outline"></ion-icon>

                                                            <time datetime="2022-01-14">January 14, 2024</time>
                                                        </div>

                                                        <div class="comments">
                                                            <i class="fa-solid fa-crosshairs"></i>

                                                            <data value="114">84</data>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </li>

                                        <li>
                                            <div class="blog-card">

                                                <figure class="card-banner">

                                                    <a href="#">
                                                        <img src="{{ asset('backend/img/new-suv.jpg') }}"
                                                            loading="lazy" class="w-100">
                                                    </a>

                                                    <a href="https://m.autopro.com.vn/ly-do-suv-hinh-hop-du-thinh-hanh-nhung-co-the-som-lui-tan-177241124131957717.chn"
                                                        class="btn-1 card-badge">View</a>

                                                </figure>

                                                <div class="card-content">

                                                    <h3 class="h3 card-title">
                                                        <a href="#">'Lý do SUV hình hộp dù thịnh hành nhưng có
                                                            thể sớm lụi tàn'</a>
                                                    </h3>

                                                    <div class="card-meta">

                                                        <div class="publish-date">
                                                            <ion-icon name="time-outline"></ion-icon>

                                                            <time datetime="2022-01-14">January 10, 2024</time>
                                                        </div>

                                                        <div class="comments">
                                                            <i class="fa-solid fa-crosshairs"></i>

                                                            <data value="114">200</data>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </li>

                                        <li>
                                            <div class="blog-card">

                                                <figure class="card-banner">

                                                    <a href="#">
                                                        <img src="{{ asset('backend/img/new-hs.jpg') }}"
                                                            loading="lazy" class="w-100">
                                                    </a>

                                                    <a href="https://m.autopro.com.vn/video-bai-test-dam-nat-chiec-mg-hs-2024-cho-thay-vi-sao-mau-xe-nay-duoc-cham-diem-an-toan-cao-nhat-177241115101558896.chn"
                                                        class="btn-1 card-badge">View</a>

                                                </figure>

                                                <div class="card-content">

                                                    <h3 class="h3 card-title">
                                                        <a href="#">' Bài test đâm nát chiếc MG HS 2024 cho thấy
                                                            vì sao mẫu xe này được chấm điểm an toàn cao nhất'</a>
                                                    </h3>

                                                    <div class="card-meta">

                                                        <div class="publish-date">
                                                            <ion-icon name="time-outline"></ion-icon>

                                                            <time datetime="2022-01-14">January 9, 2024</time>
                                                        </div>

                                                        <div class="comments">
                                                            <i class="fa-solid fa-crosshairs"></i>

                                                            <data value="114">104</data>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </li>

                                        <li>
                                            <div class="blog-card">

                                                <figure class="card-banner">

                                                    <a href="#">
                                                        <img src="{{ asset('backend/img/new-650.jpg') }}"
                                                            loading="lazy" class="w-100">
                                                    </a>

                                                    <a href="https://m.autopro.com.vn/tam-gia-tren-650-trieu-chon-omoda-c5-hay-xforce-yaris-cross-cuoc-dua-cong-nghe-giua-xe-nhat-vs-xe-trung-quoc-177241126200106433.chn"
                                                        class="btn-1 card-badge">View</a>

                                                </figure>

                                                <div class="card-content">

                                                    <h3 class="h3 card-title">
                                                        <a href="#">'Tầm giá trên 650 triệu chọn Omoda C5 hay
                                                            Xforce, Yaris Cross: Cuộc đua công nghệ giữa xe Nhật vs xe
                                                            Trung Quốc'</a>
                                                    </h3>

                                                    <div class="card-meta">

                                                        <div class="publish-date">
                                                            <ion-icon name="time-outline"></ion-icon>

                                                            <time datetime="2022-01-14">January 8, 2024</time>
                                                        </div>

                                                        <div class="comments">
                                                            <i class="fa-solid fa-crosshairs"></i>

                                                            <data value="114">100</data>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </li>

                                    </ul>

                                </div>
                            </section>
                        </div>

                    </div>

                </div>



            </div>
        </div>
    </div>
    </div>

    </div>
    </div>

    <!-- carousel viền bạc -->
    <div class="container-fluid p-3 py-5 d-flex justify-content-center"
        style="background-color: rgba(42, 42, 42, 0.992);">
        <div class="col-9 bg-vienvang my-5 p-0 ms-3"
            style="background-image: url('{{ asset('backend/img/bg-vienbac.png') }}');">
            <div id="carousel-vienvang" class="carousel slide p-5 " data-bs-ride="carousel" style="width: 100%;">

                <!-- cham nho chay slide -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
                <!-- slideshow -->
                <div class="carousel-inner px-3 pt-5 pb-1 mb-5 ">
                    <div class="carousel-item active btn-buy">
                        <img src="{{ asset('backend/img/phantom.webp') }}" alt="Los Angeles" class="d-block"
                            style="width:100%; ">
                        <div class="carousel-caption text-white">
                            <b>
                                <h2>"Thời Thượng"</h2>
                            </b>
                            <br>
                            <h3>Đơn giản chúng tôi là IT AUTO</h3>
                        </div>
                    </div>
                    <div class="carousel-item btn-buy">
                        <img src="{{ asset('backend/img/mg4.png') }}" alt="Chicago" class="d-block"
                            style="width:100%;">
                        <div class="carousel-caption text-white">
                            <b>
                                <h2>"Phong cách"</h2>
                            </b>
                            <br>
                            <h3>Đậm chất riêng</h3>
                        </div>
                    </div>
                </div>

                <!-- nut di chuyen trai phai -->
                <button class="carousel-control-prev " type="button" data-bs-target="#carousel-vienvang"
                    data-bs-slide="up">
                    <span class="carousel-control-prev-icon "></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-vienvang"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </div>










    <!-- end viền bạc -->

    <!-- CEO -->

    <div class="container-fluid d-flex p-4 py-5  justify-content-center col-12 border-top border-dark "
        style="background-color: rgba(42, 42, 42, 0.992);">
        <div class="card d-flex p-5 my-5 col-sm-10 border-secondary "
            style="background-color: rgba(67, 66, 66, 0.4);">
            <div class="row py-2">
                <div
                    class="card bg-nenlopxe col-md-4 border-secondary pt-2  "style="background-image: url('{{ asset('image/nenlopxe-6.png') }}');">
                    <img class="card-img-top " src="{{ asset('backend/img/khanh-1.jpg') }}" alt="Card image">
                    <div class="card-body">
                        <b>
                            <h4 class="float-start d-flex flex-column align-items-center text-black"> Nguyễn Quốc Khánh
                            </h4>
                            <a href="https://www.facebook.com/quockhanhjuniorit"
                                class="btn float-end btn-warning   ">See Profile</a>
                        </b>
                    </div>
                    <div class="card-footer nen-profile col-12 text-success">
                        <h6 class="col-12">Mail: khanhnq.23it@vku.udn.vn.</h6>
                        <h6 class="col-12">SĐT: 0949103246.</h6>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-column justify-content-center rounded p-1 ">
                    <div class="container-fluid d-flex justify-content-center">
                        <div class="justify-content-center d-flex col-md-8 p-2 mb-5 mt-5 " id="CEO"> CEO</div>
                    </div>
                    <div class="text-light text-center">
                        <h2 class="featurette-heading">" Hey, show me."</h2>
                        <br>
                    </div>
                </div>

                <div class="card bg-nenlopxe col-md-4 border-secondary pt-2  ">
                    <img class="card-img-top " src="{{ asset('backend/img/nguyen.jpg') }}" alt="Card image">
                    <div class="card-body">
                        <b>
                            <h4 class="float-start d-flex flex-column align-items-center text-black "> Nguyễn Khánh
                                Nguyên</h4>
                            <a href="https://www.facebook.com/nguyen.nguyenkhanh.3979/"
                                class="btn btn-warning float-end   ">See Profile</a>
                        </b>
                    </div>
                    <div class="card-footer nen-profile col-12 text-success">
                        <h6 class="col-12">Mail: nguyennk.23it@vku.udn.vn.</h6>
                        <h6 class="col-12">SĐT: 0934846450.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--end CEO  -->

    <!-- FOOTER -->
    <footer class="container-fluid bg-dark py-4  ">+

        <div class="border-top border-secondary  ">

            <section class="py-2">
                <!-- Footer -->
                <footer class="text-center text-lg-star bg-secondary text-white col-12 ">
                    <!-- Section: Social media -->
                    <section
                        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom col-md-12">
                        <!-- Left -->
                        <div class="pe-5 d-none d-lg-block col-md-6">
                            <h4><span>Get connected with us on social networks:</span></h4>
                        </div>
                        <!-- Left -->


                        <!-- Right -->
                        <div class="col-md-6 d-flex justify-content-center ps-5">
                            <a href="" class="me-4 text-reset">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="" class="me-4 text-reset">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="" class="me-4 text-reset">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="" class="me-4 text-reset">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="" class="me-4 text-reset">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="" class="me-4 text-reset">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                        <!-- Right -->
                    </section>
                    <!-- Section: Social media -->

                    <!-- Section: Links  -->
                    <section class="">
                        <div class="container text-center text-md-start mt-5">
                            <!-- Grid row -->
                            <div class="row mt-3">
                                <!-- Grid column -->
                                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                    <!-- Content -->
                                    <h6 class="text-uppercase fw-bold mb-4">
                                        <i class="fas fa-gem me-3"></i>Company name
                                    </h6>
                                    <p>
                                        Here you can use rows and columns to organize your footer content. Lorem ipsum
                                        dolor sit amet, consectetur adipisicing elit.
                                    </p>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                    <!-- Links -->
                                    <h6 class="text-uppercase fw-bold mb-4">
                                        Products
                                    </h6>
                                    <p>
                                        <a href="#!" class="text-reset">Angular</a>
                                    </p>
                                    <p>
                                        <a href="#!" class="text-reset">React</a>
                                    </p>
                                    <p>
                                        <a href="#!" class="text-reset">Vue</a>
                                    </p>
                                    <p>
                                        <a href="#!" class="text-reset">Laravel</a>
                                    </p>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                    <!-- Links -->
                                    <h6 class="text-uppercase fw-bold mb-4">
                                        Useful links
                                    </h6>
                                    <p>
                                        <a href="#!" class="text-reset">Pricing</a>
                                    </p>
                                    <p>
                                        <a href="#!" class="text-reset">Settings</a>
                                    </p>
                                    <p>
                                        <a href="#!" class="text-reset">Orders</a>
                                    </p>
                                    <p>
                                        <a href="#!" class="text-reset">Help</a>
                                    </p>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                    <!-- Links -->
                                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                                    <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                                    <p>
                                        <i class="fas fa-envelope me-3"></i>
                                        info@example.com
                                    </p>
                                    <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                                    <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                                </div>
                                <!-- Grid column -->
                            </div>
                            <!-- Grid row -->
                        </div>
                    </section>
                    <!-- Section: Links  -->

                    <!-- Copyright -->
                    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                        © 2021 Copyright:
                        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
                    </div>
                    <!-- Copyright -->
                </footer>
                <!-- Footer -->
            </section>
        </div>
        <div class="border-top border-secondary  py-1">
            <div class=" text-center  mobile-hidden bg-dark">
                <a class="btn btn-link px-3 collapsed border rounded my-1" data-mdb-collapse-init="" href="#example1"
                    role="button" aria-expanded="false" aria-controls="example1"
                    data-ripple-color="hsl(0, 0%, 67%)">
                    <i class="fas fa-code me-md-2"></i>
                    <span class="d-none d-md-inline-block text-white ">
                        Show code
                    </span>
                </a>


                <a class="btn btn-link px-3  border rounded m-1" data-ripple-color="hsl(0, 0%, 67%)">
                    <i class="fas fa-file-code me-md-2 pe-none"></i>
                    <span class="d-none d-md-inline-block export-to-snippet pe-none text-white ">
                        Edit in sandbox
                    </span>
                </a>

            </div>
        </div>
        <div class="border-top border-secondary text-white pt-1">
            <p class="float-end"><a class="text-white" href="#">Back to top</a></p>
            <p>&copy; 2017–2021 Company, Inc. &middot; <a class="text-white" href="#">Privacy</a> &middot; <a
                    class="text-white" href="#">Terms</a></p>
        </div>

    </footer>
    </div>

    <!-- animated img -->

    <div class="run">
        <p class="animated-text">

            <img src="{{ asset('backend/img/mec-nhinngang-removebg-preview.png') }}" alt="" height="160px"
                width="200px">
        </p>
    </div>

    <!-- ennd animated img -->

</body>

</html>
<script>
    // cái này là của popup ok
    const btnPopup = document.getElementById('btn-popup');
    const popup = document.getElementById('popup');
    const btnPopup2 = document.getElementById('btn-popup-2');
    const popup2 = document.getElementById('popup-2');
    const closeBtn = document.querySelector('.close');
    const closeBtn2 = document.querySelector('.close-2');

    const btnPopup3 = document.getElementById('btn-popup-3');
    const popup3 = document.getElementById('popup-3');
    const closeBtn3 = document.querySelector('.close-3');


    btnPopup.addEventListener('click', () => {
        popup.classList.remove('hidden');
    });

    closeBtn.addEventListener('click', () => {
        popup.classList.add('hidden');
    });

    btnPopup2.addEventListener('click', () => {
        popup2.classList.remove('hidden');
    });
    closeBtn2.addEventListener('click', () => {
        popup2.classList.add('hidden');
    });
    btnPopup3.addEventListener('click', () => {
        popup3.classList.remove('hidden');
    });
    closeBtn3.addEventListener('click', () => {
        popup3.classList.add('hidden');
    });
    const scrollContent = document.querySelector('.scroll-content');

    scrollContent.addEventListener('scroll', () => {
        if (scrollContent.scrollHeight > scrollContent.clientHeight) {
            scrollContent.classList.add('show-scrollbar');
        } else {
            scrollContent.classList.remove('show-scrollbar');
        }
    });
</script>
