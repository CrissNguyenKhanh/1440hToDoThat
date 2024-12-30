<div class="mb10">
    <div class="tex-danger">
        <i>*tổng cuối là tổng chưa bảo gồm giảm gá</i>
    </div>
</div>

<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>
            <input type="checkbox" value="" id="checkAll" class="input-checkbox">
        </th>
        <th>Mã đơn hàng</th>
        <th>Ngày tạo</th>
        <th>Khách hàng</th>
        <th>Thanh toán</th>
        <th class="text-right">Giam giá</th>
        <th class="text-right">Phí ship</th>
        <th class="text-right">Tổng cuối</th>
        <th>Thanh toán</th>
        <th >Giao hàng</th>
     
        <th>Trạng thái</th>
        <th>Hình thức</th>

  

    
     
    </tr>
    </thead>
    <tbody>
        @if(isset($orders) && is_object($orders))
            @foreach($orders as $order)
            <tr >
           
                <td>
                    <input type="checkbox" value="{{ $order->id }}" class="input-checkbox checkBoxItem">
                </td>
                <td>
                 <a href="{{ route('order.detail',$order->id) }}">   {{ $order->code }}</a>
                </td>
              <td>
                {{ convertDateTime($order->created_at,'H:i  d-m-Y' ) }}
              </td>
              <td>
                <div>
                    <b>N:</b> {{ $order->fullname }}
                </div>
                <div>
                    <b>P:</b> {{ $order->phone }}
                </div>
                <div>
                    <b>A:</b> {{ $order->address }}
                </div>
              </td>
           
              <td>
                {{array_column(__('payment.method'),'title','name')[$order->method] ?? '-' }}
              </td>
              <td class="text-right">
                {{convert_price($order->promotion['discount'],true) }}
              </td>
              <td class="text-right">
                {{convert_price( $order->shipping,true) }}
              </td>
              <td class="text-right">
                {{convert_price($order->cart['cartTotal'],true) }}
              </td>

              @foreach (__('cart') as $keyItem => $item)
              @if($keyItem ==='confirm') @continue @endif
                 <td class="text-center">
                  @if ($order->confirm != 'cancel')
                      
                 
                  <select name="{{ $keyItem }}"  class="setupSelect2 updateBade"
                  data-field = "{{ $keyItem }}"
                  >
                    @foreach ($item  as $keyOption =>$option)
                    @if($keyOption ==='none') @continue @endif
                        <option {{ $keyOption == $order->{$keyItem}  ? 'selected' : ''}} value="{{ $keyOption }}">{{ $option }}</option>
                    @endforeach
                  </select>
                 @else
                   -
                 @endif
                   <input type="hidden" name="" class ="changeOrderStatus" value = "{{ $order->{$keyItem} }}">
 

                 </td>
              @endforeach
             
              <td>
                {!! ($order->confirm !== 'cancel')  ? __('cart.confirm')[$order->confirm]  : '<span class="cancel-badge">'. __('cart.confirm')[$order->confirm] .'</span>'!!}

              </td>
              <td class="tex-center">
                <img src="{{array_column(__('payment.method'),'image','name')[$order->method] ?? '-' }}" title="{{array_column(__('payment.method'),'title','name')[$order->method] ?? '-' }}" alt="" style="max-width:54px">
                 <input type="hidden" name="" class="confirm" value = "{{ $order->confirm }}">
              </td>
            </tr>
            @endforeach
        @endif
    </tbody>
</table>
{{  $orders->links('pagination::bootstrap-4') }}
