<div class="panel-foot">
    <h2 class="cart-heading">
        <span>Hình thức thanh toán</span>
    </h2>
    <div class="cart-method mb30">
   @php
       
       $submitted = (old('method'))  ? true :false;
   @endphp
        @foreach (__('payment.method') as $key => $val)
            <label for="{{ $val['name'] }}" class ="uk-flex uk-flex-middle method-item">
                <input
                 type="radio" 
                 name="method" 
                 id="{{ $val['name'] }}"
            
                  
                 value ="{{ $val['name'] }}"
                 
                  {{ (old('method' ,$val['name']) == $val['name'] )? 'checked' : '' }}>
                <span class="image"><img src="{{ $val['image'] }}" alt=""></span>
                <span class="title">{{ $val['title'] }}</span>
            </label>
        @endforeach
    </div>
    <div class="card-return mb20">
        <span>{!! __('payment.return') !!}</span>
    </div>
    
</div>