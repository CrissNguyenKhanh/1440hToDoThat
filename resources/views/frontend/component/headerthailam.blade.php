<body>

    <!-- top header section set -->
    <div class="top-header">
        <div class="out-box">
            <div class="inside-box">
                <div class="col-on">
                    <span><i class="bx bxs-envelope"></i>info@gmail.com</span>
                    <span><i class="bx bxs-phone-call"></i>+84 0817011246</span>
                    <span><i class="bx bxs-alarm"></i>Sun - Fri (08 AM - 10 PM)</span>
                </div>
                <div class="col-up">
                    <a href="#"><i class="bx bx-arrow-to-right"></i>Login</a>
                    <a href="#"><i class="bx bx-user"></i>Register</a>
                    <span>Follow Us:</span>
                    <div class="social">
                        <i class="bx bxl-facebook"></i>
                        <i class="bx bxl-twitter"></i>
                        <i class="bx bxl-instagram-alt"></i>
                        <i class="bx bxl-discord-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header section end -->

    <!-- =============================================== Header section start =============================================== -->

    <header class="header">
        <div class="logo">
            <img src="{{ asset('backend/img/logolam.jpg') }}" alt="" />
        </div>
        <nav>
            <div class="navbar">
                <ul class="navlinks">
                    <li><a href="main.php" class="active">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li>
                        <a href="#">Pages<i class="bx bxs-chevron-down"></i></a>
                        <ul class="drop-down">
                            <li>
                                <a href="}">Car Listing<i class="bx bxs-chevron-down"></i></a>
                                <ul class="drop-down-two">
                                    <li><a href="#">Listing Grid</a></li>
                                    <li><a href="#">Listing List</a></li>
                                    <li><a href="#">Listing Single</a></li>
                                    <li><a href="#">Compare</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Authentication<i class="bx bxs-chevron-down"></i></a>
                                <ul class="drop-down-two">
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">Register</a></li>
                                    <li><a href="#">Forgot Password</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Blog<i class="bx bxs-chevron-down"></i></a>
                        <ul class="drop-down">
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Blog Single</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Pay</a></li>
                </ul>
            </div>
            <div class="others">
                <i class="bx bx-search"></i>
                <i class="bx bx-cart-download cart"></i>
                <a href="{{ route('home.index') }}" class="addBtn">
                    <i class="bx bx-plus-circle"></i>Add Listing
                </a>
                <i class="bx bx-menu-alt-left" id="menuBtn"></i>
            </div>
        </nav>
    </header>