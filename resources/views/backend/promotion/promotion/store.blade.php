@include('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['create']['title']])
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@php
    $url = $config['method'] == 'create' ? route('promotion.store') : route('promotion.update', $promotion->id);
@endphp
<form action="{{ $url }}" method="post" class="box">
    @csrf
    <div class="wrapper wrapper-content animated fadeInRight promotion-wrapper">
        <div class="row">
            <div class="col-lg-8">
              @include('backend.promotion.component.general',['model' => ($promotion) ??null,'offTitle'=>null])
              @include('backend.promotion.promotion.component.detail')


          
            </div>
          @include('backend.promotion.component.aside',['model'=>($promotion) ?? null])
        </div>
        <hr>


        <div class="text-right mb15">
            <button class="btn btn-primary" type="submit" name="send" value="send">Lưu lại</button>

        </div>
    </div>
</form>
@include('backend.promotion.promotion.component.popup')



<input
 type="hidden" 
 name="" 
 class="preload_promotionMethod"
value = "{{ old('method', $promotion->method ?? null) }}">

<input 
type="hidden" 
name="" 
class="preload_select-product-and-quantity"
value = "{{ old('module_type', ($promotion->discountInfomation['info']['model']) ?? null) }}">

<input type="hidden" name="" class="input_order_amount_range"
    value= " {{ json_encode(old('promotion_order_amount_range' ,($promotion->discountInfomation['info']) ?? null)) }}">
<input 
type="hidden" 
name=""
class="input_product_and_quantity"
value="{{ json_encode(old('product_and_quantity',($promotion->discountInfomation['info']) ?? null)) }}"
>
<input 
type="hidden" 
name=""
class="input_object"
value="{{ json_encode(old('object',($promotion->discountInfomation['info']['object']) ?? null)) }}"
>
