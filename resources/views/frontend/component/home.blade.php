<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('frontend/resources/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/resources/uikit/css/uikit.modify.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/resources/library/css/library.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/resources/plugins/wow/css/libs/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/resources/style.css') }}">
    <script src="{{ asset('frontend/resources/library/js/jquery.js') }}"></script>
    <title>Home 2 | Economic Marketplace</title>
</head>
<body>
    {{-- Include Header --}}


    <div id="homepage" class="homepage">
        {{-- Include Slide --}}
        @include('frontend.component.slide')

        {{-- Panel Category --}}
        <div class="panel-category page-setup">
            <div class="uk-container uk-container-center">
                <div class="panel-head">
                    <div class="uk-flex uk-flex-middle">
                        <h2 class="heading-1"><span>Danh mục sản phẩm</span></h2>
                        <div class="category-children">
                            <ul class="uk-list uk-clearfix uk-flex uk-flex-middle">
                                <li><a href="" title="">Bánh & Sữa</a></li>
                                <li><a href="" title="">Cà phê & Trà</a></li>
                                <li><a href="" title="">Thức ăn cho vật nuôi</a></li>
                                <li><a href="" title="">Rau củ</a></li>
                                <li><a href="" title="">Hoa Quả</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @php
                        $categories = ['Cake & Milk', 'Oganic Kiwi', 'Peach', 'Read Apple', 'Snacks', 'Vegetables', 'Strawbery', 'Black plum', 'Custard apple', 'Coffe & Tea', 'Headphone', 'Kiwi', 'Iphone'];
                    @endphp
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($categories as $index => $category)
                                <div class="swiper-slide">
                                    <div class="category-item bg-{{ rand(1, 7) }}">
                                        <a href="" class="image img-scaledown img-zoomin">
                                            <img src="{{ asset('frontend/resources/img/cat-' . ($index + 1) . '.png') }}" alt="{{ $category }}">
                                        </a>
                                        <div class="title"><a href="">{{ $category }}</a></div>
                                        <div class="total-product">{{ rand(0, 100) }} sản phẩm</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>


        

        {{-- Panel Banner --}}
        <div class="panel-banner">
            <div class="uk-container uk-container-center">
                <div class="panel-body">
                    <div class="uk-grid uk-grid-medium">
                        @for ($i = 1; $i <= 3; $i++)
                            <div class="uk-width-large-1-3">
                                <div class="banner-item">
                                    <span class="image">
                                        <img src="{{ asset('frontend/resources/img/banner-' . $i . '.png') }}" alt="">
                                    </span>
                                    <div class="banner-overlay">
                                        <div class="banner-title">Make your Breakfast healthy and Easy</div>
                                        <a class="btn-shop" href="">Mua ngay</a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        {{-- Other Panels... --}}
        {{-- Add content here similarly following the Blade syntax --}}
    </div>

    {{-- Include Footer --}}


    {{-- Include Popup --}}
   

    {{-- Scripts --}}
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v17.0&appId=103609027035330&autoLogAppEvents=1" nonce="E1aWx0Pa"></script>
    <script src="{{ asset('frontend/resources/plugins/wow/dist/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/resources/uikit/js/uikit.min.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend/resources/uikit/js/components/sticky.min.js') }}"></script>
    <script src="{{ asset('frontend/resources/function.js') }}"></script>
</body>
</html>
