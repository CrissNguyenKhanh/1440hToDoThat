<div class="panel-head">
    <div class="uk-flex uk-flex-middle uk-flex-space-between">
        <h2 class="cart-heading">
            <span>Thông tin đặt hàng</span>
        </h2>
        <span class='has-account'>Bạn đã có tài khoản ? <a href=""
                title="Đăng nhập Ngay">Đăng Nhập</a></span>

    </div>


</div>
<div class="panel-body mb30">
    <div class="cart-infomation">
        <div class="uk-grid uk-grid-medium mb20">
            <div class="uk-width-large-1-2">
                <div class="form-row mb20">
                    <input class="input-text" type="text" name="fullname" value ="{{ old('fullname') }}"
                        placeholder="Nhập vào Họ TÊN">
                </div>
            </div>
            <div class="uk-width-large-1-2">
                <div class="form-row mb20 ">
                    <input class="input-text" type="text" name="phone" value ="{{ old('phone') }}"
                        placeholder="Nhập vào sỐ ĐIỆN THOẠI">
                </div>
            </div>
            <div class="form-row mb20 ">
                <input class="input-text" type="text" name="email" value ="{{ old('email') }}"
                    placeholder="Nhập vào Email">
            </div>



        </div>
        <div class="uk-grid uk-grid-medium mb20">
     
            <div class="uk-width-large-1-3">
                <select name="province_id" id=""  class=" setupSelect2 province location" data-target="districts">
                    <option value="0">[Chọn Thành phố]</option>
                    @foreach ($provinces as $key =>$val)
                    <option value="{{ $val->code }}">{{ $val->name }}</option>
                        
                    @endforeach
                </select>
            </div>
            <div class="uk-width-large-1-3">
                <select name="district_id" id="" class="setupSelect2 districts location" data-target="wards" >
                    <option value="0">Chọn Quận Huyện</option>
                </select>
            </div>
            <div class="uk-width-large-1-3">
                <select name="ward_id" id="" class="setupSelect2 wards">
                    <option value="0">Chọn Phường Xã</option>
                </select>
            </div>

        </div>
        <div class="form-row mb20">
            <input class="input-text" type="text" name="address" value ="{{ old('address') }}"
                placeholder="Nhập vào Địa chỉ">
        </div>
        <div class="form-row mb20">
            <input class="input-text" type="text" name="description" value ="{{ old('description') }}"
                placeholder="Ghi chú thêm(ví dụ : Giao hàng vào lúc 3 giờ chiều)">
        </div>
    </div>

</div>