<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css">

    <!-- custom css link -->
    <link rel="stylesheet" href="./Public/Css/Demo.css">

    <!-- bootstrap 05 -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- box icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Swiper css link -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<?php
include("header.php");
?>
<!-- Home section start -->
<section class="home">

    <div id="menu-btn" class="fas fa-bars"></div>
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background: url(./Public/Images/banner1.jpg) no-repeat;">
                <div class="content">
                    <span>Explore, discovery</span>
                    <a href="package.php" class="btn">Discovery more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(./Public/Images/banner2.jpg) no-repeat;">
                <div class="content">
                    <span>Explore, discovery</span>
                    <a href="package.php" class="btn">Discovery more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(./Public/Images/banner.jpg) no-repeat;">
                <div class="content">
                    <span>Explore, discovery</span>
                    <a href="package.php" class="btn">Discovery more</a>
                </div>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
</section>


<!-- services section starts -->
<section class="services">
    <h1 class="heading-title">Our Services</h1>

    <div class="carousel">
        <button class="prev">&#10094;</button>
        <div class="carousel-track-container">
            <div class="carousel-track">
                <div class="box1">
                    <img src="./Public/Images/icon3.png" alt="Adventure">
                    <h3>SUV</h3>
                </div>
                <div class="box1">
                    <img src="./Public/Images/icon4.png" alt="Tour Guide">
                    <h3>Sport</h3>
                </div>
                <div class="box1">
                    <img src="./Public/Images/icon5.png" alt="Trekking">
                    <h3>Coupe</h3>
                </div>
                <div class="box1">
                    <img src="./Public/Images/icon6.png" alt="Camp Fire">
                    <h3>Luxury</h3>
                </div>
                <div class="box1">
                    <img src="./Public/Images/icon1.png" alt="Adventure">
                    <h3>Sedan</h3>
                </div>
                <div class="box1">
                    <img src="./Public/Images/icon2.png" alt="Adventure">
                    <h3>Classic</h3>
                </div>
            </div>
        </div>
        <button class="next">&#10095;</button>
    </div>
</section>



<!-- home about start -->
<section class="home-about">
    <div class="image">
        <img src="./Public/Images/about2.jpg" alt="">
    </div>

    <div class="content">
        <h3>Mẫu xe hiệu suất cao <br> đầu tiên tại Việt Nam <br> - Audi RS e-tron GT</h3>
        <p>Với động cơ điện mạnh mẽ và công nghệ tiên tiến, Audi RS e-tron GT sở hữu khả năng
            tăng tốc mạnh mẽ và linh hoạt. Từ việc đạt 0-100 km/h chỉ trong 3.4 giây và bạn sẽ cảm
            nhận được sức mạnh tuyệt đối ngay từ khoảnh khắc đầu tiên.
        </p>
        <a href="about.php" class="btn">Read More</a>
    </div>
</section>
<!--================================ home packages section starts ================================-->
<section class="home-packages">
    <h1 class="heading-tittle"> our packages</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="./Public/Images/car1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Discovery More</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, fugiat?</p>
                <a href="book.php" class="btn">Discovery Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./Public/Images/car2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Discovery More</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, fugiat?</p>
                <a href="book.php" class="btn">Discovery Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./Public/Images/car3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Discovery More</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, fugiat?</p>
                <a href="book.php" class="btn">Discovery Now</a>
            </div>
        </div>
    </div>

    <div class="load-more"><a href="package.php" class="btn">Load More</a></div>
</section>

<!-- ================================================= offer start =================================================-->
<section class="home-offer">
    <div class="content">
        <h3>Upto 50% off</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta, neque.</p>
        <a href="buy.php" class="btn">Buy Now</a>
    </div>
</section>
<?php
include("footer.php");
?>


<!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->

<!-- Swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Custom Js file -->
<script src="./Public/Js/Demo.js"></script>

<script>
    const track = document.querySelector('.carousel-track');
    const boxes = Array.from(track.children);
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');

    // Function to get the number of visible slides
    const getVisibleSlides = () => {
        const screenWidth = window.innerWidth;
        if (screenWidth <= 480) return 1; // 1 slide for mobile
        if (screenWidth <= 768) return 2; // 2 slides for tablet
        return 3; // 3 slides for desktop
    };

    // Recalculate slide width and positions on resize
    const recalculate = () => {
        const boxWidth = boxes[0].getBoundingClientRect().width;
        boxes.forEach((box, index) => {
            box.style.left = `${index * boxWidth}px`;
        });
        moveToSlide(currentIndex);
    };

    let currentIndex = 0;
    let visibleSlides = getVisibleSlides();

    const moveToSlide = (index) => {
        const boxWidth = boxes[0].getBoundingClientRect().width;
        track.style.transform = `translateX(-${index * boxWidth}px)`;
    };

    // Update visible slides count on window resize
    window.addEventListener('resize', () => {
        visibleSlides = getVisibleSlides();
        recalculate();
    });

    // Manual navigation
    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex < boxes.length - visibleSlides) ? currentIndex + 1 : 0; // Loop to the first
        moveToSlide(currentIndex);
    });

    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : boxes.length - visibleSlides; // Loop to the last
        moveToSlide(currentIndex);
    });

    // Automatic sliding
    const autoSlide = () => {
        currentIndex = (currentIndex < boxes.length - visibleSlides) ? currentIndex + 1 : 0; // Loop to the first
        moveToSlide(currentIndex);
    };

    const autoplayInterval = 3000; // 3 seconds
    let autoplay = setInterval(autoSlide, autoplayInterval);

    // Pause on hover and resume on leave
    document.querySelector('.carousel').addEventListener('mouseenter', () => {
        clearInterval(autoplay);
    });
    document.querySelector('.carousel').addEventListener('mouseleave', () => {
        autoplay = setInterval(autoSlide, autoplayInterval);
    });

    // Initial setup
    recalculate();
</script>


</body>

</html>