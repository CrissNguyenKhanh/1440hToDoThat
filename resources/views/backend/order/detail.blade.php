@include('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['detail']['title']])
<div class="order-wrapper">
    <div class="row">
        <div class="col-lg-8">
            <div class="ibox">
                <div class="ibox-title">
                    <div class="uk-flex uk-flex-middle uk-flex-space-between">
                        <div class="ibox-title-left">
                            <span>chi tiết đơn hàng #{{ $order->code }}</span>
                            <span class="badge">
                                <div class="badge__tip"></div>
                                <div class="badge-text "x>chưa giao</div>

                            </span>
                            <span class="badge">
                                <div class="badge__tip"></div>
                                <div class="badge-text">chưa thanh toán</div>

                            </span>
                        </div>
                        <div class="ibox-title-right">
                            Nguồn :website
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="table-order">



                        <tbody>
                            @foreach ($order->products as $key => $val)
                                @php

                                    $name = $val->pivot->name;
                                    $qty = $val->pivot->qty;
                                    $price = convert_price($val->pivot->price, true);
                                    $priceOriginal = convert_price($val->pivot->priceOriginal, true);
                                    $subtotal = convert_price($val->pivot->price * $qty, true);
                                    $image = $val->image;
                                @endphp
                                <tr class="order-item">
                                    <td>
                                        <div class="image">
                                            <span class="image img-scaledown">
                                                <img src="{{ $image }}" alt="">
                                            </span>
                                        </div>
                                    </td>
                                    <td style="width:285px">
                                        <div class="order-item-name">{{ $name }}</div>
                                        <div class="order-item-voucher ">Mã giảm giá : không có</div>
                                    </td>
                                    <td>
                                        <div class="order-item-price">
                                            {{ $price }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="order-item-times">x</div>
                                    </td>
                                    <td>
                                        <div class="order-item-qty">{{ $qty }}</div>
                                    </td>
                                    <td>
                                        <div class="order-item-subtotal">
                                            {{ $subtotal }} đ
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="5" class="text-right">Tổng tạm</td>
                                <td class="text-right"> <strong>
                                        {{ convert_price($order->promotion['discount'] + $order->cart['cartTotal'], true) }}</strong>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="5" class="text-right">giảm giá</td>
                                <td class="text-right">
                                    <strong>{{ convert_price($order->promotion['discount'], true) }}</strong>
                                </td>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="5" class="text-right">Vận chuyển</td>
                                <td class="text-right">-0đ</td>

                            </tr>
                            <tr>
                                <td colspan="5" class="text-right"><strong>Tổng cuối</strong></td>
                                <td class="text-right">
                                    <strong>{{ convert_price($order->cart['cartTotal'], true) }}</strong>
                                </td>

                            </tr>
                        </tbody>


                    </table>
                    <div class="payment-confirm confirm-box">
                        <div class="uk-flex uk-flex-middle uk-flex-space-between">
                            <div class="uk-flex uk-flex-middle">
                                <span class="icon">

                                </span>
                                <div class="payment-title">
                                    <div class="text_1">
                                        <span class="isConfirm">ĐANG CHỜ XÁC NHẬN ĐƠN HÀNG </span>
                                        {{ convert_price($order->promotion['discount'], true) }}
                                    </div>
                                    <div class="text_2">
                                        {{ array_column(__('payment.method'), 'title', 'name')[$order->method] ?? '-' }}
                                    </div>
                                </div>
                            </div>
                            <div class="cancel-block">
                      {{ ($order->confirm == 'cancel') ? 'ĐƠN HÀNG ĐÃ HỦY' :  ''}}
                            </div>
                        </div>
                    </div>

                    </table>
                    <div class="payment-confirm">
                        <div class="uk-flex uk-flex-middle uk-flex-space-between">
                            <div class="uk-flex uk-flex-middle">
                                <span><i class="fa-solid fa-truck"></i></span>
                                <div class="payment-title">
                                    <div class="text_1">
                                        XÁC NHẬN ĐƠN HÀNG
                                    </div>
                                </div>
                            </div>
                            <div class="confirm-block">
                                <button class="button confirm updateField" data-value="confirm"
                                    data-title = "ĐÃ XÁC NHẬN ĐƠN HÀNG TRỊ GIÁ">xác nhận</button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="col-lg-4 order-aside">
            <div class="ibox">
                <div class="ibox-title">
                    <div class="uk-flex uk-flex-middle uk-flex-space-between">
                        <span>Ghi chú</span>
                        <div class="edit span edit-order" data-target="description">sửa</div>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="description">
                        {{ $order->description }}
                    </div>
                </div>
            </div>


            <div class="ibox">
                <div class="ibox-title">
                    <div class="uk-flex uk-flex-middle uk-flex-space-between">
                        <h5>Thông tin khách hàng</h5>
                        <div class="edit span edit-order" data-target="customerInfo"> sửa</div>
                    </div>
                </div>

                <div class="ibox-content order-customer-infomation">
                    <div class="customer-line">
                        <strong>N:</strong>
                        <span class="fullname">{{ $order->fullname }}</span>
                    </div>
                    <div class="customer-line">
                        <strong>E:</strong>
                        <span class="email">{{ $order->email }}</span>
                    </div>
                    <div class="customer-line">
                        <strong>P:</strong>
                        <span class="phone">{{ $order->phone }}</span>
                    </div>
                    <div class="customer-line">
                        <strong>A:</strong>
                        <span class="address">{{ $order->address }}</span>
                    </div>
                    <div class="customer-line">
                        <strong>P:</strong>
                        {{ $order->ward_name }}

                    </div>
                    <div class="customer-line">
                        <strong>Q:</strong>
                        {{ $order->district_name }}

                    </div>
                    <div class="customer-line">
                        <strong>T:</strong>
                        {{ $order->province_name }}

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<input type="hidden" name="" class="orderId" value="{{ $order->id }}">
<input type="hidden" name="" class="province_id" value ="   {{ $order->province_name }}">
<input type="hidden" name="" class="district_id" value ="  {{ $order->district_name }}">
<input type="hidden" name="" class="ward_id" value ="  {{ $order->ward_name }}">
<script>
    var provinces = @json(
        $provinces->map(function ($item) {
                return [
                    'id' => $item->code,
                    'name' => $item->name,
                ];
            })->values());
</script>
