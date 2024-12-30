(function ($) {
  "use strict";
  var HT = {};
  var _token = $('meta[name="csrf-token"]').attr("content");

  HT.select2 = () => {
    if ($(".setupSelect2").length) {
      $(".setupSelect2").select2();
    }
  };
  HT.loadCity = (province_id) => {
    if (province_id != "") {
      $(".province").val(province_id).trigger("change");
    }
  };

  HT.editOrder = () => {
    $(document).on("click", ".edit-order", function () {
      let _this = $(this);
      let target = _this.attr("data-target");
      let html = "";
      let originalHtml = _this.parents(".ibox").find(".ibox-content").html();

      if (target === "description") {
        html = HT.renderDescriptionOrder(_this);
      } else if (target === "customerInfo") {
        html = HT.renderCustomerInformation();
        HT.select2();
      }

      _this.parents(".ibox").find(".ibox-content").html(html);
      HT.changeEditToCancel(_this, originalHtml);
    });
  };

  HT.changeEditToCancel = (_this, originalHtml) => {
    let encodedHtml = btoa(encodeURIComponent(originalHtml.trim()));
    _this
      .html("HỦY BỎ")
      .removeClass("edit-order")
      .addClass("cancel-edit")
      .attr("data-html", encodedHtml);
  };

  HT.cancelEdit = () => {
    $(document).on("click", ".cancel-edit", function () {
      let _this = $(this);
      let originalHtml = decodeURIComponent(atob(_this.attr("data-html")));
      _this
        .html("Sửa")
        .removeClass("cancel-edit")
        .addClass("edit-order")
        .removeAttr("data-html");
      _this.parents(".ibox").find(".ibox-content").html(originalHtml);
    });
  };

  HT.renderCustomerInformation = () => {
    let data = {
      fullname: $(".fullname").text(),
      email: $(".email").text(),
      phone: $(".phone").text(),
      address: $(".address").text(),
      email: $(".email").text(),
      ward_id: $(".ward_id").val(),
      district_id: $(".district_id").val(),
      province_id: $(".province_id").val(),
    };
    let html = `
      <div class="row mb15">
        <div class="col-lg-12">
          <div class="form-row">
            <label for="">Họ tên</label>
            <input type="text" name="fullname" class="form-control" value = "${
              data.fullname
            }">
          </div>
        </div>
      </div>
  
      <div class="row mb15">
        <div class="col-lg-12">
          <div class="form-row">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control" value = "${
              data.email
            }">
          </div>
        </div>
      </div>
  
      <div class="row mb15">
        <div class="col-lg-12">
          <div class="form-row">
            <label for="">Số điện thoại</label>
            <input type="text" name="phone" class="form-control" value = "${
              data.phone
            }">
          </div>
        </div>
      </div>
  
      <div class="row mb15">
        <div class="col-lg-12">
          <div class="form-row">
            <label for="">Địa chỉ</label>
            <input type="text" name="address" class="form-control" value = "${
              data.address
            }">
          </div>
        </div>
      </div>
  
      <div class="row mb15">
        <div class="col-lg-12">
          <div class="form-row">
            <label for="">Thành phố</label>
            <select name="province_id" class="form-control setupSelect2 province location" data-target="districts">
              <option value="">[Chọn thành phố]</option>
              ${HT.provincesList(data.province_id)}
            </select>
          </div>
        </div>
      </div>
  
      <div class="row mb15">
        <div class="col-lg-12">
          <div class="form-row">
            <label for="">Quận huyện</label>
            <select name="district_id" class="form-control setupSelect2 districts location" data-target="wards" >
              <option value="">[Chọn Quận huyện]</option>
            </select>
          </div>
        </div>
      </div>
  
      <div class="row mb15">
        <div class="col-lg-12">
          <div class="form-row">
            <label for="">Phường Xã</label>
            <select name="ward_id" class="form-control setupSelect2 wards" >
              <option value="">[Chọn Phường Xã]</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row mb15">
        <div class="col-lg-12">
          <div class="form-row">
         <button class="btn btn-primary saveCustomer">lưu lại</button>
          </div>
        </div>
      </div>
    `;
    HT.loadCity(data.province_id);
    return html;
  };
  HT.provincesList = () => {
    let html = "";
    for (let i = 0; i < provinces.length; i++) {
      html +=
        '<option value ="' +
        provinces[i].id +
        '">' +
        provinces[i].name +
        "</option>";
    }
    return html;
  };

  HT.renderDescriptionOrder = (_this) => {
    let inputValue = _this.parents(".ibox").find(".ibox-content").text().trim();
    return (
      '<input type="text" class="form-control ajax-edit" name="description" data-field="description" value="' +
      inputValue +
      '">'
    );
  };

  HT.updateDescription = () => {
    $(document).on("change", ".ajax-edit", function () {
      let _this = $(this);
      let field = _this.attr("data-field");
      let value = _this.val();
      let option = {
        id: $(".orderId").val(),
        payload: {
          [field]: value,
        },
        _token: _token,
      };
      HT.ajaxUpdateOrderInfo(option, _this);
    });
  };
  HT.getLocation = () => {
    $(document).on("change", ".location", function () {
      let _this = $(this);
      let option = {
        data: {
          location_id: _this.val(),
        },
        target: _this.attr("data-target"),
      };

      HT.sendDataTogetLocation(option);
    });
  };
  HT.sendDataTogetLocation = (option) => {
    let district_id = $(".district_id").val();
    let ward_id = $(".ward_id").val();
    $.ajax({
      url: "ajax/location/getLocation",
      type: "GET",
      data: option,
      dataType: "json",
      success: function (res) {
        $("." + option.target).html(res.html);

        if (district_id != "" && option.target == "districts") {
          $(".districts").val(district_id).trigger("change");
        }

        if (ward_id != "" && option.target == "wards") {
          $(".wards").val(ward_id).trigger("change");
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log("Lỗi: " + textStatus + " " + errorThrown);
      },
    });
  };

  HT.ajaxUpdateOrderInfo = (option, _this) => {
    $.ajax({
      url: "ajax/order/update",
      type: "POST",
      data: option,
      dataType: "json",
      success: function (res) {
        if (res.error === 10) {
          let target = _this
            .parents(".ibox")
            .find(".cancel-edit")
            .attr("data-target");
          if (target === "description") {
            HT.renderDescriptionHtml(option.payload, _this.parents(".ibox"));
          }
        } else if (target == "customerInfo") {
          HT.renderCustomerInfoHtML(res);
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error: " + textStatus + " " + errorThrown);
      },
    });
  };
  HT.renderCustomerInfoHtML = (res) => {
    let html = `
      <div class="customer-line">
        <strong>N:</strong>
        <span class="fullname">${res.order.fullname || ""}</span>
      </div>
      <div class="customer-line">
        <strong>E:</strong>
        <span class="email">${res.order.email || ""}</span>
      </div>
      <div class="customer-line">
        <strong>P:</strong>
        <span class="phone">${res.order.phone || ""}</span>
      </div>
      <div class="customer-line">
        <strong>A:</strong>
        <span class="address">${res.order.address || ""}</span>
      </div>
      <div class="customer-line">
        <strong>Phường:</strong>
        ${res.order.ward_name || ""}
      </div>
      <div class="customer-line">
        <strong>Quận:</strong>
        ${res.order.district_name || ""}
      </div>
      <div class="customer-line">
        <strong>Thành phố:</strong>
        ${res.order.province_name || ""}
      </div>
    `;

    // Update customer information display
    $(".order-customer-infomation").html(html);

    // Update hidden form values
    $(".ward_id").val(res.order.ward_id);
    $(".district_id").val(res.order.district_id);
    $(".province_id").val(res.order.province_id);

    // Reset the edit/cancel button
    $(".order-customer-infomation")
      .parents(".ibox")
      .find(".cancel-edit")
      .removeClass("cancel-edit")
      .addClass("edit-order")
      .removeAttr("data-html")
      .html("Sửa");
  };

  HT.renderDescriptionHtml = (payload, target) => {
    target.find(".ibox-content").html(payload.description);
    target
      .find(".cancel-edit")
      .removeClass("cancel-edit")
      .addClass("edit-order")
      .removeAttr("data-html")
      .html("Sửa");
  };
  HT.saveCustomer = () => {
    $(document).on("click", ".saveCustomer", function () {
      let _this = $(this);
      let option = {
        id: $(".orderId").val(),
        payload: {
          fullname: $("input[name=fullname]").val(),
          email: $("input[name=email]").val(),
          phone: $("input[name=phone]").val(),
          address: $("input[name=address]").val(),
          ward_id: $(".wards").val(),
          district_id: $(".districts").val(),
          province_id: $(".province").val(),
        },
        _token: _token,
      };

      HT.ajaxUpdateOrderInfo(option, _this);
    });
  };
  HT.updateField = () => {
    $(document).on("click", ".updateField", function () {
 

   let _this = $(this)
      
      let option = {
        payload: {
        'confirm' : _this.attr("data-value"),
        },
        id: $(".orderId").val(),
        _token:_token
      }
      console.log(option);
     
      $.ajax({
        url: "ajax/order/update",
        type: "POST",
        data: option,
        dataType: "json",
        success: function (res) {
        console.log(res);
          if(res.error == 10){
            HT.createOrderConfirmSection(_this);
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log("Lỗi: " + textStatus + " " + errorThrown);
        },
      });


   
      
    });
  };

  
  HT.createOrderConfirmSection =(_this) =>{
     let button = '<button class="button updateField" data-value ="cancel" data-title="Đã hủy thanh toán đơn hàng">hủy đơn</button>'
     $('.cancel-block').html(button)
     let correctImage =` <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="24"
                                        height="24" fill="currentColor">
                                        <!-- Font Awesome Free 6.7.2 -->
                                        <path
                                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                                    </svg>`
                          
                       $('.confirm-box').find('span.icon').html(correctImage);
                       $('.isConfirm').html(_this.attr('data-title'))
                       if(_this.attr('data-field')=='field'){
                        $('.confirm-block').html('Đã xác nhận')
                       }
                        if(_this.attr('data-confirm') == 'cancel'){
                          
                          $('.cancel-block').html('Đơn hàng đã được hủy')
                       }
  }
  

  HT.khanhdeptrai = () =>{
    $(document).on("change", ".updateBade", function () {
      let _this = $(this)
      
      let option = {
        payload: {
       [_this.attr('data-field')] : _this.val(),
        },
        id: _this.parents('tr').find('.checkBoxItem').val(),
        _token:_token
      }
      let confirmStatus =_this.parents('tr').find('.confirm').val()
    
      
      if(confirmStatus != 'pending'){
        $.ajax({
          url: "ajax/order/update",
          type: "POST",
          data: option,
          dataType: "json",
          success: function (res) {
            toastr.clear()
            if(res.error === 10){
              
               toastr.success("cập nhật trạng thái thành công", 'Thông báo từ hệ thống!')
            }else{
               toastr.error('Có vấn đề xảy ra! Hãy thử lại', 'Thông báo từ hệ thống!')
            }
          
          },
         
        });
      }else{
        // let originnalStatus = _this.siblings('.changeOrderStatus').val();
        // _this.val(originnalStatus);
        toastr.error('Bạn phải xác nhận đơn hàng trước khi thực hiện cập nhât này', 'Thông báo từ hệ thống!')
       
      }
      
   
  });
  }
  $(document).ready(function () {
    HT.editOrder();
    HT.select2();
    HT.updateDescription();
    HT.getLocation();
    HT.saveCustomer();
    HT.updateField();
    HT.khanhdeptrai();
  });
})(jQuery);
