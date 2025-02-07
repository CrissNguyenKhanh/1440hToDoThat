@extends('frontend.homepage.layout')
@section('content')
    <div class="product page-wrapper">
        <div class="uk-container uk-container-center">

            @include('frontend.component.breadcumb', [
                'model' => $productCatalogue,
                'breadCrumb' => $breadCrumb,
            ])
            <div class="panel-body">
                <div class="filter">
                    <div class="uk-flex uk-flex-middle uk-flex-space-between">
                        <div class="filter-widget">
                            <div class="uk-flex uk-flex-middle">
                                <a href="" class="view-grid active">
                                    <i class="fi-rs-grid"></i>
                                </a>
                                <a href="" class="view-grid view-list">
                                    <i class="fi-rs-list"></i>
                                </a>
                                <div class="filer-button ml10 mr20">
                                    <a href="" class="btn-filter uk-flex uk-flex-middle">
                                        <i class="fi-rs-filter mr5"></i>
                                        <span>bộ lọc</span>
                                    </a>
                                </div>
                                <div class="perpage uk-flex uk-flex-middle">
                                    <div class="filter-text">Hiển thị</div>
                                    <select name="perpage " id="perpage" class="nice-select">
                                        @for ($i = 20; $i < 100; $i += 20)
                                            <option value="{{ $i }}">{{ $i }} Sản phẩm</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="sorting">
                            <select name="sort" class="nice-select filtering">
                                <option value="">Lọc kết quả theo</option>
                                <option value="price:desc">Giá: Từ cao đến thấp</option>
                                <option value="price:asc">Giá: Từ thấp đến cao</option>
                                <option value="title:asc">Tên sản phẩm A-Z</option>
                                <option value="title:desc">Tên sản phẩm Z-A</option>
                            </select>
                        </div>

                    </div>
                </div>
                @if (!is_null($products))
                    
          
                <div class="product-list">
                    <div class="uk-grid uk-grid-medium">
                        @foreach ($products as $product)
                            
                 
                        <div class="uk-width-1-2 uk-width-small-1-2 
                        uk-width-medium-1-3 uk-width-large-1-5 mb20">
                             @include('frontend.component.product-item',
                             ['product'=>$product])
                        </div>
                        @endforeach
                    </div>
                </div>
                 <div class="uk-flex uk-flex-center">
                     @include('frontend.component.pagination',['model' =>$products])
                 </div>
                @endif
            </div>
        </div>
    </div>
@endsection
