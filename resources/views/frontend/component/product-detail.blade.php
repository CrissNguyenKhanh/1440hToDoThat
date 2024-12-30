@php
    $name = $product->name;
    $canonical = write_url($product->canonical);
    $image = image($product->image);
    $price = getPrice($product);
    $catName = $productCatalogue->name;
    $description = $product->description;
    $attributeCatalogue = $product->attributeCatalogue;
    $colorImage = [
        'https://wp.alithemes.com/html/ecom/demo/assets/imgs/page/product/img-gallery-2.jpg',
        'https://wp.alithemes.com/html/ecom/demo/assets/imgs/page/product/img-gallery-1.jpg',
        'https://wp.alithemes.com/html/ecom/demo/assets/imgs/page/product/img-gallery-3.jpg',
        'https://wp.alithemes.com/html/ecom/demo/assets/imgs/page/product/img-gallery-4.jpg',
        'https://wp.alithemes.com/html/ecom/demo/assets/imgs/page/product/img-gallery-5.jpg',
        'https://wp.alithemes.com/html/ecom/demo/assets/imgs/page/product/img-gallery-6.jpg',
        'https://wp.alithemes.com/html/ecom/demo/assets/imgs/page/product/img-gallery-7.jpg',
    ];
    $gallery = json_decode($product->album);

   
@endphp

<div class="panel-body">
    <div class="uk-grid uk-grid-medium">
        <!-- Product Image Section -->
        <div class="uk-width-large-1-2">
            <div class="popup-gallery">
                <!-- Main Image Slider -->
                <div class="swiper-container">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-wrapper big-pic">
                        @foreach($gallery as $image)
                            <div class="swiper-slide" data-swiper-autoplay="2000">
                                <a href="{{ $image }}" class="image img-cover">
                                    <img src="{{ $image }}" alt="Gallery Image">
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <!-- Thumbnail Slider -->
                <div class="swiper-container-thumbs">
                    <div class="swiper-wrapper pic-list">
                        @foreach($gallery as $thumb)
                            <div class="swiper-slide">
                                <span class="image img-cover img-scaledown">
                                    <img src="{{ $thumb }}" alt="Thumbnail Image">
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Info Section -->
        <div class="uk-width-large-1-2">
            <div class="popup-product">
                <h1 class="title product-main-title">{{ $name }}</h1>
                <div class="rating">
                    <div class="uk-flex uk-flex-middle">
                        <div class="author">Đánh giá</div>
                        <div class="star">
                            @for($i = 0; $i < 5; $i++)
                                <i class="fa fa-star"></i>
                            @endfor
                        </div>
                        <div class="rate-number">(65 reviews)</div>
                    </div>
                </div>
                {!! $price['html'] !!}

                <!-- Product Variants -->
                @include('frontend.product.product.component.variant')

                <!-- Quantity Section -->
                <div class="quantity">
                    <div class="text">Số lượng</div>
                    <div class="uk-flex uk-flex-middle">
                        <div class="quantitybox uk-flex uk-flex-middle">
                            <button class="minus quantity-button">
                                <img src="frontend/resources/img/minus.svg" alt="Decrease Quantity">
                            </button>
                            <input type="text" value="1" class="quantity-text">
       <button class="plus quantity-button">
                                <img src="frontend/resources/img/plus.svg" alt="Increase Quantity">
                            </button>
                        </div>
                        <div class="btn-group uk-flex uk-flex-middle">
                            <button class="btn-item btn-1 addToCart" data-id="{{ $product->id }}">
                                <a href="#">Thêm vào giỏ hàng</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="description">{!! $description !!}</div>
            </div>
        </div>
    </div>

    <!-- Sidebar Categories Section -->
    <div class="uk-width-large-1-4">
        <div class="aside">
            @if (!is_null($category))
                @foreach ($category as $val)
                    @php
                        $name = $val['item']->languages->first()->pivot->name;
                    @endphp
                    <div class="aside-panel aside-category">
                        <h2 class="aside-heading">{{ $name }}</h2>
                        @if (!is_null($val['children']) && count($val['children']))
                            <div class="aside-body">
                                <ul class="uk-list uk-clearfix">
                                    @foreach ($val['children'] as $items)
                                        @php
                                            $ItemName = $items['item']->languages->first()->pivot->name;
                                            $ItemImages = $items['item']->image;
                                            $ItemCanonical = write_url($items['item']->languages->first()->pivot->canonical);
                                            $productCount = $items['item']->products_count;
                                        @endphp
                                        <li class="mb20">
                                            <div class="categories-item-1">
                                                <a href="{{ $ItemCanonical }}" title="{{ $ItemName }}">
                                                    <div class="uk-flex uk-flex-middle">
                                                        <img src="{{ $ItemImages }}" alt="{{ $ItemName }}">
                                                        <span class="title">{{ $ItemName }}</span>
                                                    </div>
                                                    <span class="total">{{ $productCount }}</span>
                                                </a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                @endforeach
            @endif
</div>
    </div>
</div>

<input type="hidden" class="productName" value="{{ $product->name }}">
<input type="hidden" class="attributeCatalogue" value="{{ json_encode($attributeCatalogue) }}">
<input type="hidden" class="productCanonical" value="{{ write_url($product->canonical) }}">

<script>
    // Xử lý sự kiện tăng/giảm số lượng
    document.querySelectorAll('.quantity-button').forEach(button => {
        button.addEventListener('click', function () {
            const input = this.parentNode.querySelector('.quantity-text');
            let value = parseInt(input.value) || 1;

            if (this.classList.contains('plus')) {
                value++;
            } else if (this.classList.contains('minus')) {
                value--;
                if (value < 1) value = 1;
            }

            input.value = value;
        });
    });

    // Xử lý trực tiếp trên ô nhập số lượng
    document.querySelectorAll('.quantity-text').forEach(input => {
        input.addEventListener('input', function () {
            let value = parseInt(this.value) || 1;
            if (value < 1) value = 1;
            this.value = value;
        });
    });
</script>