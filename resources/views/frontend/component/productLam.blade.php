<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css">

  <!-- custom css link -->
  <link rel="stylesheet" href="{{ asset('frontend/resources/Demo.css') }}">

  <!-- box icon -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- Swiper css link -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>

  <!-- =============================================== Header section start =============================================== -->

  <section class="header">
    <a href="Demo.php" class="logo">
      <img src="{{ asset('backend/img/logolam.jpg') }}" alt="Logo">
    </a>

    <nav class="navbar">
      <a href="{{ route('home.index') }}">Home</a>
      <a href="About.php">About</a>
      <a href="Package.php">Package</a>
      <a href="Contact.php">Contact</a>
      <a href="Sale.php">Sale</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
  </section>


  <div class="heading" style="background: url({{ asset('backend/img/banner2.jpg') }}) no-repeat;">
    <h1>about us</h1>
  </div>
  <!-- =========================== about section starts ===========================-->
  <section class="about">
    <div class="image">
      <img src="{{ asset('backend/img/aboutus.jpg') }}" alt="">
    </div>

    <div class="content">
      <h3>Why choose us</h3>
      <p>Chúng tôi tự hào là đơn vị dẫn đầu trong việc cung cấp các gói dịch vụ du lịch độc đáo, giá cả hợp lý và đội ngũ hướng dẫn viên tận tâm.</p>
      <p>Khách hàng luôn hài lòng với trải nghiệm du lịch an toàn, đáng nhớ và đầy cảm hứng tại các điểm đến hấp dẫn nhất.</p>
      <div class="icons-container">
        <div class="icons">
          <i class="fas fa-map"></i>
          <span>Top Destinations</span>
        </div>

        <div class="icons">
          <i class="fas fa-hand-holding-usd"></i>
          <span>Affordable price</span>
        </div>

        <div class="icons">
          <i class="fas fa-headset"></i>
          <span>24/7 Guide Service</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================= Review section start ==========================-->
  <section class="reviews">
    <div class="swiper reviews-slider" slider>
      <div class="swiper-wrapper">
        <div class="swiper-slider slide">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>"Dịch vụ tuyệt vời, đội ngũ hỗ trợ rất nhiệt tình. Chắc chắn sẽ quay lại trong các chuyến du lịch tiếp theo!"</p>
          <h3>Minh Thảo</h3>
          <span>Khách hàng</span>
          <img src="{{ asset('backend/img/banner1.jpg') }}" alt="">
        </div>

        <div class="swiper-slider slide">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>"Chuyến đi được tổ chức chuyên nghiệp và chu đáo. Tôi rất hài lòng với các địa điểm mà công ty đã gợi ý."</p>
          <h3>Quang Huy</h3>
          <span>Khách hàng</span>
          <img src="{{ asset('backend/img/banner1.jpg') }}" alt="">
        </div>

        <div class="swiper-slider slide">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>"Tôi thực sự ấn tượng với mức giá hợp lý và dịch vụ chu đáo mà công ty mang lại. Rất đáng để trải nghiệm."</p>
          <h3>Thùy Dương</h3>
          <span>Khách hàng</span>
          <img src="{{ asset('backend/img/banner1.jpg') }}" alt="">
        </div>

        <div class="swiper-slider slide">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>"Hành trình đầy thú vị và bổ ích. Các hướng dẫn viên rất chuyên nghiệp và thân thiện."</p>
          <h3>Ngọc Lan</h3>
          <span>Khách hàng</span>
          <img src="{{ asset('backend/img/banner1.jpg') }}" alt="">
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>
  <!-- footer section starts -->
  <section class="footer">
    <div class="box-container">
      <div class="box">
        <h3>Quick links</h3>
        <a href="Demo.php"> <i class="fas fa-angle-right"></i> Home</a>
        <a href="About.php"><i class="fas fa-angle-right"></i> About</a>
        <a href="Package.php"><i class="fas fa-angle-right"></i> Package</a>
        <a href="Contact.php"><i class="fas fa-angle-right"></i> Contact</a>
        <a href="Sale.php"><i class="fas fa-angle-right"></i> Sale</a>
      </div>

      <div class="box">
        <h3>extra links</h3>
        <a href="Demo.php"> <i class="fas fa-angle-right"></i> ask questions </a>
        <a href="Demo.php"> <i class="fas fa-angle-right"></i> about us </a>
        <a href="Demo.php"> <i class="fas fa-angle-right"></i> privacy policy </a>
        <a href="Demo.php"> <i class="fas fa-angle-right"></i> terms of use </a>
      </div>

      <div class="box">
        <h3>contact info</h3>
        <a href="Demo.php"> <i class="fas fa-phone"></i> +84 17011246 </a>
        <a href="Demo.php"> <i class="fas fa-phone"></i> +84 17011246 </a>
        <a href="Demo.php"> <i class="fas fa-envelope"></i>Kazuho2005@gmail.com</a>
        <a href="Demo.php"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
      </div>

      <div class="box">
        <h3>contact info</h3>
        <a href="Demo.php"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="Demo.php"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="Demo.php"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="Demo.php"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

    </div>

    <div class="credit">
      <p>Website Design and Development by <strong>DrakeLee</strong></p>
      <p>All images and content ©AutoShowroom, 2024.</p>
      <p>Special thanks to our partners for providing vehicle data and insights.</p>
    </div>

  </section>

  <!-- Swiper js link -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

  <!-- Custom Js file -->
  <script src="{{ asset('frontend\resources\Demo.js') }}"></script>
</body>

</html>
