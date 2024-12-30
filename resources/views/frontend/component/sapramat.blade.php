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
    <link rel="stylesheet" href="{{ asset('frontend/resources/hangsang.css') }}">
    <title>Sắp ra mắt</title>
</head>

<body>


    <!-- Phần đầu của chương trình: search, login.. -->

    <div class="container-fluid p-0 bg-dark" style="position: relative;">
        <video src="{{ asset('backend/img/video/video-nice.mp4') }}" class="fixed-bottom bg-tralvel-1" width="230px"
            height="auto" autoplay muted loop></video>
        <div
            class="d-flex flex-wrap align-items-center p-0 justify-content-center justify-content-lg-start fixed-top bg-dark">

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
                <button type="button" class="btn btn-outline-light me-2">Login</button>
                <button type="button" class="btn btn-secondary">Sign-up</button>
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

    <!-- List phân loại xe-->

    <div class=" fixed-top bg-secondary  rounded-1 border border-5 border-secondary bg-tralvel-1"
        style="width: 103px; margin-top: 340px;">
        <button class="btn bg-nenlopxe-2 " data-bs-toggle="offcanvas" data-bs-target="#demo">
            Phân loại
        </button>
    </div>

    <!-- end-phân loại xe -->

    <!--  bắt đầu danh sách xe -->

    <div class="container-fluid bg-nenlopxe " style="position: relative;">
        <!-- Danh sách xe -->
        <div id="New" class="row d-flex justify-content-center p-2 px-0 pt-3 ">
            <!-- offcanvas nút bấm phân loại xe -->
            <div class="d-flex justify-content-center py-5 ">
                <h2 class="border border-secondary border-5 p-2 bg-tralvel bg-warning mb-4 mt-2 px-3 bg-nenlopxe-2">Sắp
                    ra mắt:</h2>
            </div>
            <!-- offcanvas phân loại xe -->

            <div class="offcanvas offcanvas-start " id="demo">

                <div class="offcanvas-header">
                    <div class="col-10">
                        <h2 class="offcanvas-title py-4 text-black">Phân loại xe : </h2>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn-close clear-fix float-end"
                            data-bs-dismiss="offcanvas"></button>
                    </div>

                </div>
                <div class="offcanvas-body bg-nenlopxe-1 ">
                    <a href="#New" style="text-decoration: none; ">
                        <h4 class="mb-3 text-black">
                            <p>- Mới</p>
                        </h4>
                    </a>


                    <button class="btn clear-fix float-end btn-warning my-4 px-2 bg-tralvel "
                        data-bs-dismiss="offcanvas" type="button"> Chuyển về trang </button>
                </div>
            </div>

            <!-- dòng 1 sắp ra mắt -->
            <div style="height: 490px; overflow: hidden; " class="px-4 col-md-4 mt-2 pt-4 ">
                <div class="card bg-cars text-white ">
                    <img class="card-img-top px-1 img-car" id="btn-popup-19"
                        src="{{ asset('backend/img/honda-crv-2024-gia-ban-moi-nhat-_-Danh-gia-xe-_-hinh-anh-4-removebg-preview.png') }}"
                        alt="Card image" height="275px" style="width: 100%;" />


                    <div id="popup-19" class="hidden">
                        <div class="popup-content">
                            <div class="scroll-content ">
                                <img src="{{ asset('backend/img/logo-removebg-preview.png') }}" alt=""
                                    width="205px" height="200px"><br> <br>
                                <img src="{{ asset('backend/img/honda-crv-2024-gia-ban-moi-nhat-–-Danh-gia-xe-–-hinh-anh-4.jpg') }} "
                                    alt="" width="1000px" height="auto">
                            </div>
                            <button class="close-19 btn  btn-secondary mt-3 p-2 px-3"> Close </button>
                        </div>
                    </div>

                    <!-- end popup -->


                    <div class="control-list card-body ">
                        <span class="card-title border-bottom  d-flex clear-fix">
                            <h5 class="col-lg-6"> <i class="fa-solid fa-check i-check pe-2"></i>Honda CR-V 2025</h5>
                            <h6 class="col-lg-6  text-end pt-1 text-price"> 1.029.000.000 <span class="px-1"
                                    style="color: rgb(59, 185, 0);"> VND</span></h6>
                        </span>
                        <div class="endtrang">
                            <p class="card-text"><i class="fa-solid fa-list pe-1 p-1"></i>
                                Hỗ trợ lái xe tự động cấp độ 2<br></p>
                            <a href="#" class="btn clear-fix float-end btn-warning m-0 px-4">Mua</a>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 490px; overflow: hidden; " class="px-4 col-md-4 mt-2 pt-4 ">
                <div class="card bg-cars text-white">
                    <img class="card-img-top px-1 img-car " id="btn-popup-20"
                        src="{{ asset('backend/img/Ford-Ranger-2025-removebg-preview.png') }}" height="275px"
                        style="width: 100%;">



                    <!-- popup img -->

                    <div id="popup-20" class="hidden">
                        <div class="popup-content">
                            <div class="scroll-content ">
                                <img src="{{ asset('backend/img/logo-removebg-preview.png') }}" alt=""
                                    width="205px" height="200px"><br> <br>
                                <img src="{{ asset('backend/img/Ford-Ranger-2025.jpeg') }}" alt=""
                                    width="1000px" height="auto">
                            </div>
                            <button class="close-20 btn  btn-secondary mt-3 p-2 px-3"> Close </button>
                        </div>
                    </div>

                    <!-- end popup -->



                    <div class="control-list card-body ">
                        <span class="card-title border-bottom  d-flex clear-fix">
                            <h5 class="col-lg-6"> <i class="fa-solid fa-check i-check pe-2"></i> Ranger 2025</h5>
                            <h6 class="col-lg-6  text-end pt-1 text-price"><span class="px-1"
                                    style="color: rgb(59, 185, 0);">Chưa có thông tin</span></h6>
                        </span>
                        <div class="endtrang">
                            <p class="card-text"><i class="fa-solid fa-list pe-1 p-1"></i>
                                Áp dụng công nghệ hiện đại như hệ thống lái tự động và hỗ trợ đỗ xe tiên tiến
                            </p>
                            <a href="#" class="btn clear-fix float-end btn-warning m-0 px-4">Mua</a>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 490px; overflow: hidden; " class="px-4 col-md-4 mt-2 pt-4 ">
                <div class="card bg-cars text-white ">
                    <img class="card-img-top px-1 img-car " id="btn-popup-21"
                        src="{{ asset('backend/img/ix3-removebg-preview.png') }} " alt="Card image" height="275px"
                        style="width: 100%;">


                    <!-- popup img -->

                    <div id="popup-21" class="hidden">
                        <div class="popup-content">
                            <div class="scroll-content ">
                                <img src="{{ asset('backend/img/logo-removebg-preview.png') }}" alt=""
                                    width="205px" height="200px"><br> <br>
                                <img src="{{ asset('backend/img/ix3.jpg') }}" alt="" width="1000px"
                                    height="auto">
                            </div>
                            <button class="close-21 btn  btn-secondary mt-3 p-2 px-3"> Close </button>
                        </div>
                    </div>

                    <!-- end popup -->



                    <div class="control-list card-body ">
                        <span class="card-title border-bottom  d-flex clear-fix">
                            <h5 class="col-lg-6"> <i class="fa-solid fa-check i-check pe-2"></i>BMW iX3</h5>
                            <h6 class="col-lg-6  text-end pt-1 text-price"><span class="px-1"
                                    style="color: rgb(59, 185, 0);">chưa có thông tin</span></h6>
                        </span>
                        <div class="endtrang">
                            <p class="card-text"><i class="fa-solid fa-list pe-1 p-1"></i>
                                Công nghệ kết nối thông minh và hệ thống lái xe tự động cấp độ 2<br></p>
                            <a href="#" class="btn clear-fix float-end btn-warning m-0 px-4">Mua</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- dòng 2 của sắp ra mắt-->

        <div class="row d-flex justify-content-center p-2 px-0 ">
            <!-- danh sách xe dòng 2 -->
            <div style="height: 490px; overflow: hidden; " class="px-4 col-md-4 mt-2 pt-3 ">
                <div class="card bg-cars text-white ">
                    <img class="card-img-top px-1 img-car " id="btn-popup-22"
                        src="{{ asset('backend/img/subaruuu-removebg-preview.png') }}" alt="Card image"
                        height="275px" style="width: 100%;">


                    <!-- popup img -->

                    <div id="popup-22" class="hidden">
                        <div class="popup-content">
                            <div class="scroll-content ">
                                <img src="{{ asset('backend/img/logo-removebg-preview.png') }}" alt=""
                                    width="205px" height="200px"><br> <br>
                                <img src="{{ asset('backend/img/subaruuu.jpg') }}" alt="" width="1000px"
                                    height="auto">
                            </div>
                            <button class="close-22 btn  btn-secondary mt-3 p-2 px-3"> Close </button>
                        </div>
                    </div>

                    <!-- end popup -->


                    <div class="control-list card-body ">
                        <span class="card-title border-bottom  d-flex clear-fix">
                            <h5 class="col-lg-6"> <i class="fa-solid fa-check i-check pe-2"></i>Subaru Crosstrek</h5>
                            <h6 class="col-lg-6  text-end pt-1 text-price"> 1.500.000.000 <span class="px-1"
                                    style="color: rgb(59, 185, 0);"> VND</span></h6>
                        </span>
                        <div class="endtrang">
                            <p class="card-text"><i class="fa-solid fa-list pe-1 p-1"></i>
                                Động cơ: 2.0L hút khí tự nhiên<br>
                                <a href="#" class="btn clear-fix float-end btn-warning m-0 px-4">Mua</a>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 490px; overflow: hidden; " class="px-4 col-md-4 mt-2 pt-3 ">
                <div class="card bg-cars text-white ">
                    <img class="card-img-top px-1 img-car " id="btn-popup-23"
                        src="{{ asset('backend/img/Hyundai_Tucson-removebg-preview.png') }}" alt="240px"
                        height="275px" style="width: 100%;">



                    <!-- popup img -->

                    <div id="popup-23" class="hidden">
                        <div class="popup-content">
                            <div class="scroll-content ">
                                <img src="{{ asset('backend/img/logo-removebg-preview.png') }}" alt=""
                                    width="205px" height="200px"><br> <br>
                                <img src="{{ asset('backend/img/Hyundai Tucson.jpg') }}" alt=""
                                    width="1000px" height="auto">
                            </div>
                            <button class="close-23 btn  btn-secondary mt-3 p-2 px-3"> Close </button>
                        </div>
                    </div>

                    <!-- end popup -->


                    <div class="control-list card-body ">
                        <span class="card-title border-bottom  d-flex clear-fix">
                            <h5 class="col-lg-6"> <i class="fa-solid fa-check i-check pe-2"></i>Hyundai Tucson</h5>
                            <h6 class="col-lg-6  text-end pt-1 text-price">800.000.000 <span class="px-1"
                                    style="color: rgb(59, 185, 0);">VND</span></h6>
                        </span>
                        <div class="endtrang">
                            <p class="card-text"><i class="fa-solid fa-list pe-1 p-1"></i>
                                Động cơ: 2.0L<br>
                                <i class="fa-solid fa-list pe-1 p-1"></i> Công suất: 180 mã lực
                            </p>
                            <a href="#" class="btn clear-fix float-end btn-warning m-0 px-4">Mua</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <footer class="container-fluid bg-dark py-4  ">

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
            <p>&copy; 2017-2021 Company, Inc. &middot; <a class="text-white" href="#">Privacy</a> &middot; <a
                    class="text-white" href="#">Terms</a></p>
        </div>

    </footer>
</body>

</html>
<script>
    // cái này là của popup ok
    const btnPopup19 = document.getElementById('btn-popup-19');
    const popup19 = document.getElementById('popup-19');
    const closeBtn19 = document.querySelector('.close-19');

    btnPopup19.addEventListener('click', () => {
        popup19.classList.remove('hidden');
    });
    closeBtn19.addEventListener('click', () => {
        popup19.classList.add('hidden');
    });

    const btnPopup20 = document.getElementById('btn-popup-20');
    const popup20 = document.getElementById('popup-20');
    const closeBtn20 = document.querySelector('.close-20');

    btnPopup20.addEventListener('click', () => {
        popup20.classList.remove('hidden');
    });
    closeBtn20.addEventListener('click', () => {
        popup20.classList.add('hidden');
    });

    const btnPopup21 = document.getElementById('btn-popup-21');
    const popup21 = document.getElementById('popup-21');
    const closeBtn21 = document.querySelector('.close-21');

    btnPopup21.addEventListener('click', () => {
        popup21.classList.remove('hidden');
    });
    closeBtn21.addEventListener('click', () => {
        popup21.classList.add('hidden');
    });

    const btnPopup22 = document.getElementById('btn-popup-22');
    const popup22 = document.getElementById('popup-22');
    const closeBtn22 = document.querySelector('.close-22');

    btnPopup22.addEventListener('click', () => {
        popup22.classList.remove('hidden');
    });
    closeBtn22.addEventListener('click', () => {
        popup22.classList.add('hidden');
    });
    const btnPopup23 = document.getElementById('btn-popup-23');
    const popup23 = document.getElementById('popup-23');
    const closeBtn23 = document.querySelector('.close-23');

    btnPopup23.addEventListener('click', () => {
        popup23.classList.remove('hidden');
    });
    closeBtn23.addEventListener('click', () => {
        popup23.classList.add('hidden');
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
