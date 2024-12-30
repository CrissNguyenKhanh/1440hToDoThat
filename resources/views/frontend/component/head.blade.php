<base href="{{ config('app.url') }}" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="index, follow" />
<meta name="author" content="{{ $system['homepage_company'] }}" />
<meta name="copyright" content="© {{ $system['homepage_company'] }}" />
<meta name="description" content="Website Auto IT Oto - giải pháp tối ưu tìm kiếm, so sánh và mua bán ô tô trực tuyến do sinh viên VKU phát triển. Đảm bảo trải nghiệm người dùng và thông tin đáng tin cậy." />
<meta name="keywords" content="auto, ô tô, mua bán xe, xe hơi, VKU, công nghệ ô tô, Auto IT Oto" />
<meta http-equiv="refresh" content="1800" />
<link rel="icon" href="{{ $system['homepage_favicon'] }}" type="image/png" sizes="30x38">
<meta name="csrf-token" content="{{ csrf_token() }}">



<meta name="description" content="{{ $seo['meta_description'] }}" />
<meta name="keyword" content="{{ $seo['meta_keyword'] }}" />

<link rel="canonical" href="{{ $seo['canonical'] }}" />

<meta property="og:locale" content="vi_VN" />
<!-- For Facebook -->
<meta property="og:title" content="{{ $seo['meta_title'] }}" />
<meta property="og:type" content="article" />
<meta property="og:image" content="{{ $seo['meta_images'] }}" />
<meta property="og:url" content="{{ $seo['canonical'] }}" />
<meta property="og:description" content="{{ $seo['meta_description'] }}" />
<meta property="og:site_name" content="Linote" />
<meta property="fb:admins" content="123456789" />
<meta property="fb:app_id" content="987654321" />

<!-- For Twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="{{ $seo['meta_title'] }}" />
<meta name="twitter:description" content="{{ $seo['meta_description'] }}" />
<meta name="twitter:image" content="{{ $seo['meta_images'] }}" />
 
@php
    $CoreCss =[
        'backend/css/plugins/toastr/toastr.min.css',
        'frontend/resources/fonts/font-awesome-4.7.0/css/font-awesome.min.css',
         'frontend/resources/uikit/css/uikit.modify.css',
         'https://unpkg.com/swiper/swiper-bundle.min.css',
         'frontend/resources/library/css/library.css',
         'frontend/resources/plugins/wow/css/libs/animate.css',
         'frontend/core/plugins/jquery-nice-select-1.1.0/css/nice-select.css',
    'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css',
         'frontend/resources/style.css'
];
    if(isset($config['css'])){
      foreach($config['css'] as $key=>$val){
        array_push($CoreCss,$val);
      }
    }

@endphp


@foreach ($CoreCss as $item)

<link rel="stylesheet" href="{{ asset($item) }}">
@endforeach


<!-- DEBUG-VIEW START 1 APPPATH/Config/Views/frontend/homepage/common/head.php -->






<script src="{{ asset('frontend/resources/Library/js/jquery.js') }}"></script>
