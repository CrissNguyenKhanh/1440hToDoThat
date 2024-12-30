<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="hangsang.css">
    <title>Hạng Trung</title>
</head>
<body>
  
        <!-- Phần đầu của chương trình: search, login.. -->

    <div class="container-fluid p-0 bg-dark" style="position: relative;">
      <video src="{{ asset('backend/img/video/video.mp4') }}" class="fixed-bottom bg-tralvel-1" width="230px" height="auto" autoplay muted loop ></video>
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start fixed-top bg-dark">
  
        <ul class="nav col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ps-5 pb-2">
        <li><a href="#" class="nav-link p-0 px-2 text-secondary"></a><img src="image/logo.png" alt="logo" width="85" height="80"></li>
        <li><a href="#" class="nav-link px-2 res-hide text-white mt-3">Features</a></li>
        <li><a href="#" class="nav-link px-2 res-hide text-white mt-3">Pricing</a></li>
        <li><a href="#" class="nav-link px-2 res-hide text-white mt-3">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 res-hide text-white mt-3">About</a></li>
        </ul>

        <form class=" col-lg-auto mb-3 mb-lg-0 me-lg-3 ">
        <input type="search" class="form-control form-control-dark res-hide" placeholder="Search..." aria-label="Search">
        <i class="fa-solid fa-magnifying-glass search-hide mx-5" width="80" height="80"></i>       
        </form>

        <div class="text-end pe-5 col-lg-auto">
        <button type="button" class="btn btn-outline-light me-2">Login</button>
        <button type="button" class="btn btn-secondary">Sign-up</button>
        </div>
    </div>
      <nav class="navbar navbar-expand-lg navbar-dark container-fluid pb-3 pt-5 mt-5" aria-label="Tenth navbar example">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
      
            @include('frontend.component.routernguyen')
          </div>
        </nav>
    </div>

        <!-- List-->

    <div class=" fixed-top bg-secondary rounded-1 border border-5 border-secondary bg-tralvel-1" style="width: 103px; margin-top: 320px;">
        <button class="btn bg-nenlopxe-2 " data-bs-toggle="offcanvas" data-bs-target="#demo" >
            Phân loại
        </button>
    </div>

     <!-- end phân loại -->

    <div class="container-fluid bg-nenlopxe " style="position: relative;">
                    <!-- Danh sách xe -->
            <div id="Sedan" class="row d-flex justify-content-center p-2 px-0 pt-3 ">    

                <!-- offcanvas nút bấm phân loại xe -->
                
                <div class="d-flex justify-content-center py-5 ">
                    <h2 class="border border-secondary border-5 p-2 bg-tralvel mb-4 mt-2 px-3 bg-nenlopxe-2">Hạng Trung:</h2>
                </div>
                
                <!-- Hạng trung Sedan -->

                <div class="container-fluid ps-4 py-2 mb-5 bg-secondary bg-tralvel" style="text-shadow: 1px 1px 2px rgb(214, 129, 0);">
                    <b><h2>- Hạng Trung: <span class="text-warning">Sedan</span></h2></b>
                </div>

                <!-- offcanvas phân loại xe -->
                
                <div class="offcanvas offcanvas-start " id="demo">
                    
                    <div class="offcanvas-header">
                        <div class="col-10">
                            <h3 class="offcanvas-title py-4 text-black">Phân loại xe hạng trung: </h3>
                        </div>
                        <div class="col-2"> 
                            <button type="button" class="btn-close clear-fix float-end" data-bs-dismiss="offcanvas"></button>
                        </div>

                    </div>
                    <div class="offcanvas-body bg-nenlopxe-1 ">
                        <a href="#Sedan" style="text-decoration: none; ">
                            <h4 class="mb-3 text-black">
                                <p>- Sedan</p>
                            </h4>
                        </a>
                        <a href="#Hatchback"style="text-decoration: none; " >
                            <h4 class="mt-4 text-black">
                                <p>- Hatchback</p>
                            </h4>
                        </a>


                      <button class="btn clear-fix float-end btn-warning my-4 px-2 bg-tralvel " data-bs-dismiss="offcanvas" type="button"> Chuyển về trang </button>
                    </div>
                </div>

                <!-- dòng 1 hạng trung-Sedan -->

                <div style="height: 490px; overflow: hidden; " class="px-4 col-md-4 mt-2 pt-3 ">
                  <div class="card bg-cars text-white" >
                      <img class="card-img-top px-1 img-car" id="btn-popup-13" src="image/k5-removebg-preview (1).png" height="275px" style="width: 100%;">


                        <!-- popup img -->

                        <div id="popup-13" class="hidden">
                          <div class="popup-content">
                              <div class="scroll-content ">
                                  <img src="/Doan-oto-1/Doan-Web-Oto-Cuoiki/image/logo-removebg-preview.png" alt="" width="205px" height="200px"><br> <br>  
                                  <img src="image/k5.jpg" alt="" width="1000px" height="auto">
                              </div>
                              <button class="close-13 btn  btn-secondary mt-3 p-2 px-3"> Close </button>
                          </div>
                        </div>

                        <!-- end popup -->

                      <div class="control-list card-body ">
                          <span class="card-title border-bottom  d-flex clear-fix">
                              <h5 class="col-lg-6"> <i class="fa-solid fa-check i-check pe-2" ></i>Kia K5</h5>
                              <h6 class="col-lg-6  text-end pt-1 text-price"> 859.911.000 <span class="px-1" style="color: rgb(59, 185, 0);">  VND</span></h6>
                          </span>
                          <div class="endtrang">
                          <p class="card-text"><i class="fa-solid fa-list pe-1 p-1"></i>
                              Công suất cực đại: 191 hp / 6,100 rpm<br>
                              <i class="fa-solid fa-list pe-1 p-1"></i>Loại động cơ: Theta III 2.5 GDI</p>
                          <a href="#" class="btn clear-fix float-end btn-warning m-0 px-4">Mua</a>   
                          </div> 
                      </div>
                  </div>
                </div>  

                <div style="height: 490px; overflow: hidden; " class="px-4 col-md-4 mt-2 pt-4 ">
                    <div class="card bg-cars text-white" >
                        <img class="card-img-top px-1 img-car" id="btn-popup-11" src="image/mazda6-removebg-preview.png" alt="Card image" height="275px" style="width: 100%;">


                          <!-- popup img -->

                          <div id="popup-11" class="hidden">
                            <div class="popup-content">
                                <div class="scroll-content ">
                                    <img src="/Doan-oto-1/Doan-Web-Oto-Cuoiki/image/logo-removebg-preview.png" alt="" width="205px" height="200px"><br> <br>  
                                    <img src="image/mazda6.png" alt="" width="1000px" height="auto">
                                </div>
                                <button class="close-11 btn  btn-secondary mt-3 p-2 px-3"> Close </button>
                            </div>
                          </div>

                          <!-- end popup -->

                        <div class="control-list card-body ">
                            <span class="card-title border-bottom  d-flex clear-fix">
                                <h5 class="col-lg-6"> <i class="fa-solid fa-check i-check pe-2" ></i>Mazda 6</h5>
                                <h6 class="col-lg-6  text-end pt-1 text-price"> 746.000.000 <span class="px-1" style="color: rgb(59, 185, 0);">  VND</span></h6>
                            </span>
                            <div class="endtrang">
                            <p class="card-text"><i class="fa-solid fa-list pe-1 p-1"></i>
                                 Loại động cơ	SkyActiv-G 2.0L<br>
                                <i class="fa-solid fa-list pe-1 p-1"></i> Công suất: 154/6000</p>
                            <a href="#" class="btn clear-fix float-end btn-warning m-0 px-4">Mua</a>   
                            </div> 
                        </div>
                    </div>
                </div>    
                <div style="height: 490px; overflow: hidden; " class="px-4 col-md-4 mt-2 pt-4 ">
                    <div class="card bg-cars text-white" >
                        <img class="card-img-top px-1 img-car" id="btn-popup-12" src="image/hyundai-sonata-1-52ed-removebg-preview (1).png" height="275px" style="width: 100%;">


                          <!-- popup img -->

                          <div id="popup-12" class="hidden">
                            <div class="popup-content">
                                <div class="scroll-content ">
                                    <img src="/Doan-oto-1/Doan-Web-Oto-Cuoiki/image/logo-removebg-preview.png" alt="" width="205px" height="200px"><br> <br>  
                                    <img src="image/hyundai-sonata-1-52ed.jpg" alt="" width="1000px" height="auto">
                                </div>
                                <button class="close-12 btn  btn-secondary mt-3 p-2 px-3"> Close </button>
                            </div>
                          </div>

                          <!-- end popup -->

                        <div class="control-list card-body ">
                            <span class="card-title border-bottom  d-flex clear-fix">
                                <h5 class="col-lg-6"> <i class="fa-solid fa-check i-check pe-2" ></i>Hyudai Sonata </h5>
                                <h6 class="col-lg-6  text-end pt-1 text-price"> 1.021.000.000 <span class="px-1" style="color: rgb(59, 185, 0);">  VND</span></h6>
                            </span>
                            <div class="endtrang">
                            <p class="card-text"><i class="fa-solid fa-list pe-1 p-1"></i>
                                Động cơ: 2.4L,2.0L Twin Turbo<br>
                                <i class="fa-solid fa-list pe-1 p-1"></i>Công suất: 185-245 mã lực</p>
                            <a href="#" class="btn clear-fix float-end btn-warning m-0 px-4">Mua</a>   
                            </div> 
                        </div>
                    </div>
                </div>       
            </div>

            <!-- dòng 2 của hạng trung-Sedan-->

            <div class="row d-flex justify-content-center p-2 px-0 ">

                <!-- danh sách xe dòng 2 -->
                <div style="height: 490px; overflow: hidden; " class="px-4 col-md-4 mt-2 pt-4 ">
                  <div class="card bg-cars text-white " >
                      <img class="card-img-top px-1 img-car" id="btn-popup-10" src="image/toyota-camry-removebg-preview.png" alt="Card image" height="275px" style="width: 100%;">

                        <!-- popup img -->

                        <div id="popup-10" class="hidden">
                          <div class="popup-content">
                              <div class="scroll-content ">
                                  <img src="/Doan-oto-1/Doan-Web-Oto-Cuoiki/image/logo-removebg-preview.png" alt="" width="205px" height="200px"><br> <br>  
                                  <img src="image/toyota-camry.jpg" alt="" width="1000px" height="auto">
                              </div>
                              <button class="close-10 btn  btn-secondary mt-3 p-2 px-3"> Close </button>
                          </div>
                        </div>

                        <!-- end popup -->

                                              
                      <div class="control-list card-body ">
                          <span class="card-title border-bottom  d-flex clear-fix">
                              <h5 class="col-lg-6"> <i class="fa-solid fa-check i-check pe-2" ></i>TYT-camry</h5>
                              <h6 class="col-lg-6  text-end pt-1 text-price"> 1.220.00.000 <span class="px-1" style="color: rgb(59, 185, 0);">  VND</span></h6>
                          </span>
                          <div class="endtrang">
                          <p class="card-text"><i class="fa-solid fa-list pe-1 p-1"></i>
                              Công suất: 185/6000 (xăng), 134 mã lực<br>
                              <i class="fa-solid fa-list pe-1 p-1"></i> Control (Cruise Control) kết hợp 7 túi khí</p>
                          <a href="#" class="btn clear-fix float-end btn-warning m-0 px-4">Mua</a>   
                          </div> 
                      </div>
                  </div>
                </div> 
                       
            </div>
            <div id="Hatchback" class="row d-flex justify-content-center p-2 px-0 pt-0">                                
                
            <!-- dòng 1 hạng Trung-Hatchback -->
                
                <!-- Hạng Trung-Hatchback  -->

                <div class="container-fluid ps-4 my-5 py-2 bg-secondary bg-tralvel text-black " style="text-shadow: 1px 1px 2px rgb(214, 129, 0);">
                    <b><h2>- Hạng Trung: <span class="text-warning">Hatchback</span></h2></b>
                </div>

                <!-- danh sách -->
                <div style="height: 490px; overflow: hidden; " class="px-4 col-md-4 mt-2 pt-4 ">
                    <div class="card bg-cars text-white" >
                        <img class="card-img-top px-1 img-car" id="btn-popup-14" src="image/i30-removebg-preview.png" alt="Card image" height="275px" style="width: 100%;">


                          <!-- popup img -->

                          <div id="popup-14" class="hidden">
                            <div class="popup-content">
                                <div class="scroll-content ">
                                    <img src="/Doan-oto-1/Doan-Web-Oto-Cuoiki/image/logo-removebg-preview.png" alt="" width="205px" height="200px"><br> <br>  
                                    <img src="image/i30.jpg" alt="" width="1000px" height="auto">
                                </div>
                                <button class="close-14 btn  btn-secondary mt-3 p-2 px-3"> Close </button>
                            </div>
                          </div>

                          <!-- end popup -->

                        <div class="control-list card-body ">
                            <span class="card-title border-bottom  d-flex clear-fix">
                                <h5 class="col-lg-6"> <i class="fa-solid fa-check i-check pe-2" ></i>Hyudai I30 N</h5>
                                <h6 class="col-lg-6  text-end pt-1 text-price">891.000.000 <span class="px-1" style="color: rgb(59, 185, 0);">  VND</span></h6>
                            </span>
                            <div class="endtrang">
                            <p class="card-text"><i class="fa-solid fa-list pe-1 p-1"></i>
                                Công suất: 271 mã lực tại 6.000 vòng/phút<br>
                                <i class="fa-solid fa-list pe-1 p-1"></i>Tốc độ tối đa: 250 km/h.</p>
                            <a href="#" class="btn clear-fix float-end btn-warning m-0 px-4">Mua</a>   
                            </div> 
                        </div>
                    </div>
                </div>  
                <div style="height: 490px; overflow: hidden; " class="px-4 col-md-4 mt-2 pt-4 ">
                    <div class="card bg-cars text-white" >
                        <img class="card-img-top px-1 img-car" id="btn-popup-15" src="image/volkwagen-removebg-preview.png" alt="Card image" height="275px" style="width: 100%;">


                          <!-- popup img -->

                          <div id="popup-15" class="hidden">
                            <div class="popup-content">
                                <div class="scroll-content ">
                                    <img src="/Doan-oto-1/Doan-Web-Oto-Cuoiki/image/logo-removebg-preview.png" alt="" width="205px" height="200px"><br> <br>  
                                    <img src="image/volkwagen.jpg" alt="" width="1000px" height="auto">
                                </div>
                                <button class="close-15 btn  btn-secondary mt-3 p-2 px-3"> Close </button>
                            </div>
                          </div>

                          <!-- end popup -->

                        <div class="control-list card-body ">
                            <span class="card-title border-bottom  d-flex clear-fix">
                                <h5 class="col-lg-6"> <i class="fa-solid fa-check i-check pe-2" ></i>Volkwagen Golf</h5>
                                <h6 class="col-lg-6  text-end pt-1 text-price"> 8.500.000.000   <span class="px-1" style="color: rgb(59, 185, 0);">  VND</span></h6>
                            </span>
                            <div class="endtrang">
                            <p class="card-text"><i class="fa-solid fa-list pe-1 p-1"></i>
                                Động cơ: 4 xi-lanh 2.0 lít tăng áp<br>
                                    <i class="fa-solid fa-list pe-1 p-1"></i>
                                Công suất: 245 PS (242 HP / 180 kW)</p>
                            <a href="#" class="btn clear-fix float-end btn-warning m-0 px-4">Mua</a>   
                            </div> 
                        </div>
                    </div>
                </div>  
                          
            </div>

            <!-- dòng 2 của hạng Trung-Hatchback -->

            <div class="row d-flex justify-content-center p-2 px-0 pt-3 ">

                <!-- danh sách xe dòng 2 -->

                <div style="height: 490px; overflow: hidden; " class="px-4 col-md-4 mt-2 pt-3 ">
                    <div class="card bg-cars text-white" >
                        <img class="card-img-top px-1 img-car" id="btn-popup-16" src="image/civc-removebg-preview.png" alt="" height="275px" style="width: 100%;">


                          <!-- popup img -->

                          <div id="popup-16" class="hidden">
                            <div class="popup-content">
                                <div class="scroll-content ">
                                    <img src="/Doan-oto-1/Doan-Web-Oto-Cuoiki/image/logo-removebg-preview.png" alt="" width="205px" height="200px"><br> <br>  
                                    <img src="image/civc.jpg" alt="" width="1000px" height="auto">
                                </div>
                                <button class="close-16 btn  btn-secondary mt-3 p-2 px-3"> Close </button>
                            </div>
                          </div>

                          <!-- end popup -->

                        <div class="control-list card-body ">
                            <span class="card-title border-bottom  d-flex clear-fix">
                                <h5 class="col-lg-6"> <i class="fa-solid fa-check i-check pe-2" ></i>Honda Civic:</h5>
                                <h6 class="col-lg-6  text-end pt-1 text-price">789.000.000<span class="px-1" style="color: rgb(59, 185, 0);">  VND</span></h6>
                            </span>
                            <div class="endtrang">
                            <p class="card-text"><i class="fa-solid fa-list pe-1 p-1"></i>
                                Động cơ: 1.5L VTEC TURBO (G, RS)/2.4L<br>
                                <i class="fa-solid fa-list pe-1 p-1"></i> Công suất cực đại lên tới 200 mã lực.</p>
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
              <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom col-md-12">
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
            <a class="btn btn-link px-3 collapsed border rounded my-1" data-mdb-collapse-init="" href="#example1" role="button" aria-expanded="false" aria-controls="example1" data-ripple-color="hsl(0, 0%, 67%)">
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
          <p>&copy; 2017–2021 Company, Inc. &middot; <a class="text-white" href="#">Privacy</a> &middot; <a class="text-white" href="#">Terms</a></p>
        </div>
  
    </footer>
</body>
</html>

<script>
  // cái này là của popup ok
  const btnPopup10 = document.getElementById('btn-popup-10');
  const popup10 = document.getElementById('popup-10');
  const closeBtn10 = document.querySelector('.close-10');
  
  btnPopup10.addEventListener('click', () => {
      popup10.classList.remove('hidden');
  });
  closeBtn10.addEventListener('click', () => {
      popup10.classList.add('hidden');
  });

  const btnPopup11 = document.getElementById('btn-popup-11');
  const popup11 = document.getElementById('popup-11');
  const closeBtn11 = document.querySelector('.close-11');
  
  btnPopup11.addEventListener('click', () => {
      popup11.classList.remove('hidden');
  });
  closeBtn11.addEventListener('click', () => {
      popup11.classList.add('hidden');
  });

  const btnPopup12 = document.getElementById('btn-popup-12');
  const popup12 = document.getElementById('popup-12');
  const closeBtn12 = document.querySelector('.close-12');
  
  btnPopup12.addEventListener('click', () => {
      popup12.classList.remove('hidden');
  });
  closeBtn12.addEventListener('click', () => {
      popup12.classList.add('hidden');
  });

  const btnPopup13 = document.getElementById('btn-popup-13');
  const popup13 = document.getElementById('popup-13');
  const closeBtn13 = document.querySelector('.close-13');
  
  btnPopup13.addEventListener('click', () => {
      popup13.classList.remove('hidden');
  });
  closeBtn13.addEventListener('click', () => {
      popup13.classList.add('hidden');
  });
  const btnPopup14 = document.getElementById('btn-popup-14');
  const popup14 = document.getElementById('popup-14');
  const closeBtn14 = document.querySelector('.close-14');
  
  btnPopup14.addEventListener('click', () => {
      popup14.classList.remove('hidden');
  });
  closeBtn14.addEventListener('click', () => {
      popup14.classList.add('hidden');
  });
  const btnPopup15 = document.getElementById('btn-popup-15');
  const popup15 = document.getElementById('popup-15');
  const closeBtn15 = document.querySelector('.close-15');
  
  btnPopup15.addEventListener('click', () => {
      popup15.classList.remove('hidden');
  });
  closeBtn15.addEventListener('click', () => {
      popup15.classList.add('hidden');
  });
  const btnPopup16 = document.getElementById('btn-popup-16');
  const popup16 = document.getElementById('popup-16');
  const closeBtn16 = document.querySelector('.close-16');
  
  btnPopup16.addEventListener('click', () => {
      popup16.classList.remove('hidden');
  });
  closeBtn16.addEventListener('click', () => {
      popup16.classList.add('hidden');
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