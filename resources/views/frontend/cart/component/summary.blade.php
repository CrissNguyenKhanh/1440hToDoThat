<div class="panel-foot mb30">
    <div class="cart-summary">
          <div class="cart-summary-item">
            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                <span class="summary-title">Giảm giá</span>
                <span class="summary-value discount-value">-{{ convert_price($cartPromotion['discount'],true) }} đ</span>

          </div>
          </div>
          <div class="cart-summary-item">
            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                <span class="summary-title">Phí giao hàng</span>
                <span class="summary-value">Miễn phí</span>

          </div>
          </div>
          <div class="cart-summary-item">
            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                <span class="summary-title bold">tổng iền</span>
                <span class="summary-value cart-total">{{ (count($carts) && !is_null($carts)) ? convert_price($cartCaculate['cartTotal'] - $cartPromotion['discount'],true) :convert_price($cartCaculate['cartTotal'],true) }}</span>

          </div>
          </div>
          
    </div>
  </div>