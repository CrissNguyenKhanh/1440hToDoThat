<div class="row">
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-success pull-right">Tháng</span>
                <h5>Đơn hàng trong tháng</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">{{ $orderStatics['orderCurrentMonth'] }}</h1>
                {!! growHtml($orderStatics['grow']) !!}
                <small>Tăng trưởng so với tháng trước</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-info pull-right">Tổng số đơn hàng</span>
                <h5>Orders</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">{{ $orderStatics['totalOrders'] }}</h1>
                <div class="stat-percent font-bold text-info">
                    {{ growth($orderStatics['totalOrders'], $orderStatics['cancelOrders']) }}% <i
                        class="fa fa-level-up"></i></div>
                <small>Tỷ lệ hủy chiếm (Số đơn hủy {{ $orderStatics['cancelOrders']}} )
                </small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-primary pull-right">Total</span>
                <h5>Tổng doanh thu</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">{{ convert_price($orderStatics['revenueOrders'],true)  }} đ</h1>
                <small>Tổng doanh thu</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-danger pull-right">Customer</span>
                <h5>Tổng số khách hàng</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">{{ $customerStatistic['totalCustomer'] }}</h1>
                <small>tổng số khách hàng</small>
            </div>
        </div>
    </div>
</div>