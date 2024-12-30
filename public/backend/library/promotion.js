(function ($) {
  "use strict";
  var HT = {};
  var _token = $('meta[name="csrf-token"]').attr("content"); // Sửa lỗi cú pháp

  $.fn.elExist = function () {
    return this.length > 0;
  };

  HT.promotionNeverEnd = () => {
    $(document).on("change", "#neverEnd", function () {
      let _this = $(this);
      let isChecked = _this.prop("checked");
      if (isChecked) {
        $("input[name=endDate").val("").attr("disable", true);
      } else {
        let endDate = $("input[name=startDate").val();
        $("input[name=endDate").val(endDate).attr("disable", false);
      }
    });
  };
  HT.promotionSource = () => {
    $(document).on("click", ".chooseSource", function () {
      let _this = $(this);
      let flag = _this.attr("id") == "allSource" ? true : false;
      if (flag) {
        _this.parents(".ibox-content").find(".source-wrapper").remove();
      } else {
        $.ajax({
          url: "ajax/source/getAllSource",
          type: "GET",
          // data: option,
          dataType: "json",
          success: function (res) {
            let sourceData = res.data;

            if (!$(".source-wrapper").length) {
              let sourceHtml =
                HT.renderPromotionSource(sourceData).prop("outerHTML");
              _this.parents(".ibox-content").append(sourceHtml);
              HT.promotionMultipleSelect2();
            }
          },
          error: function (xhr, status, error) {
            console.error("Error:", error);
            console.error("Response:", xhr.responseText);
          },
        });
      }
    });
  };

  HT.renderPromotionSource = (sourceData) => {
    let wrapper = $("<div>").addClass("source-wrapper");
    // if(sourceData.length){
    let select = $("<select>")
      .addClass("multipleSelect2")
      .attr("name", "sourceValue[]")
      .attr("multiple", true);
    for (let i = 0; i < sourceData.length; i++) {
      let option = $("<option>")
        .attr("value", sourceData[i].id)
        .text(sourceData[i].name);
      select.append(option);
    }
    wrapper.append(select);

    // }
    return wrapper;
  };
  HT.chooseCustomerCondition = () => {
    $(document).on("change", ".chooseApply", function () {
      let _this = $(this);
      let id = _this.attr("id");
      if (id == "allApply") {
        _this.parents(".ibox-content").find(".apply-wrapper").remove();
      } else {
        let applyHtml = HT.renderApplyCondition().prop("outerHTML");
        _this.parents(".ibox-content").append(applyHtml);
        HT.promotionMultipleSelect2();
      }
    });
  };
  HT.renderApplyCondition = () => {
    let applyConditionData = JSON.parse($(".applyStatusList").val());
    let wrapper = $("<div>").addClass("apply-wrapper");
    let wrapperConditionItem = $("<div>").addClass("wrapper-condition");
    if (applyConditionData.length) {
      let select = $("<select>")
        .addClass("multipleSelect2 conditionItem")
        .attr("name", "applyValue[]")
        .attr("multiple", true);
      for (let i = 0; i < applyConditionData.length; i++) {
        let option = $("<option>")
          .attr("value", applyConditionData[i].id)
          .text(applyConditionData[i].name);
        select.append(option);
      }
      wrapper.append(select);
      wrapper.append(wrapperConditionItem);
    }
    return wrapper;
  };
  HT.chooseApplyItem = () => {
    $(document).on("change", ".conditionItem", function () {
      let _this = $(this);
      let condition = {
        value: _this.val(),
        label: _this.select2("data"),
      };
      $(".wrapperConditionItem").each(function () {
        let _item = $(this);
        let itemClass = _item.attr("class").split(" ")[1];
        console.log(itemClass);
        if (condition.value.includes(_item) == false) {
          _item.remove();
        }
      });

      for (let i = 0; i < condition.value.length; i++) {
        let value = condition.value[i];
        let html = HT.createConditionItem(value, condition.label[i].text); // Khởi tạo lại html cho từng giá trị
      }
    });
  };

  HT.createConditionLabel = (label, value) => {
    // let deleteButton = $('<div>').addClass('delete').
    // html('<svg data-icon="TrashSolidLarge" aria-hidden="true" focusable="false" width="15" height="16" viewBox="0 0 15 16" class="bem-Svg" style="display: block;"><path fill="currentColor" d="M2 14a1 1 0 001 1h9a1 1 0 001-1V6H2v8zM13 2h-3a1 1 0 01-1-1H6a1 1 0 01-1 1H1v2h13V2h-1z"></path></svg>').attr('data-condition-item',
    //     value
    // );
    let conditionLabel = $("<div>").addClass("conditionLabel").text(label);
    let flex = $("<div>").addClass(
      "uk-flex uk-flex-middle uk-flex-space-between"
    );
    let wrapperBox = $("<div>").addClass("mb10");
    flex.append(conditionLabel);
    wrapperBox.append(flex);
    return wrapperBox.prop("outerHTML");
  };

  HT.createConditionItem = (value, label) => {
    if (
      !$(".wrapper-condition")
        .find("." + value)
        .elExist()
    ) {
      $.ajax({
        url: "ajax/dashboard/getPromotionConditionValue",
        type: "GET",
        data: {
          value: value,
        },
        dataType: "json",
        success: function (res) {
          let optionData = res.data;
          let conditionItem = $("<div>").addClass(
            "wrapperConditionItem mt10" + value
          );
          let conditionHiddenInput = $(".condition_input_" + value);
          let conditionHiddenInputValue = [];
          if (conditionHiddenInput.length) {
            conditionHiddenInputValue = JSON.parse(conditionHiddenInput.val());
          }

          let select = $("<select>")
            .addClass("multipleSelect2 objectItem")
            .attr("name", value + "[]")
            .attr("multiple", true);
          for (let i = 0; i < optionData.length; i++) {
            let option = $("<option>")
              .attr("value", optionData[i].id)
              .text(optionData[i].text);
            select.append(option);
          }
          select.val(conditionHiddenInputValue).trigger("change");
          const conditionLabel = HT.createConditionLabel(label, value);
          conditionItem.append(conditionLabel);
          conditionItem.append(select);

          $(".wrapper-condition").append(conditionItem);
          HT.promotionMultipleSelect2();
        },
      });
    }
  };

  // HT.deleteCondition = () =>{
  // $(document).on('click','.wrapperConditionItem .delete',function(){
  //       let _this=$(this)
  //       let unSelectedValue = _this.attr('data-condition-item')
  //       let selectedItem = $('.conditionItem').val()
  //       let indexOf = selectedItem.indexOf(unSelectedValue)
  //         if(indexOf !== -1 ){

  //          }
  //       //   $('.conditionItem').val(unSelectedValue).trigger('change')

  // })
  // }

  var rangers = [];

  HT.btnJs100 = () => {
    $(document).on("click", ".btn-js-100", function () {
      let _button = $(this);
      let trLasChild = $(".order_amount_range").find("tbody tr:last-child");
      let newFrom = parseInt(
        trLasChild
          .find(".order_amount_range_from input")
          .val()
          .replace(/\./g, "")
      );
      let newTo = parseInt(
        trLasChild.find(".order_amount_range_to input").val().replace(/\./g, "")
      );

      $(".order_amount_range").find("tr").removeClass("errorLine");
      rangers.push({ from: newFrom, to: newTo });
      let $tr = $("<tr>");
      let tdList = [
        {
          class: "order_amount_range_from td-range",
          name: "promotion_order_amount_range[amountFrom][]",
          value: addCommas(parseInt(newTo) + 1),
        },
        {
          class: "order_amount_range_to td-range",
          name: "promotion_order_amount_range[amountTo][]",
          value: 0,
        },
      ];

      for (let i = 0; i < tdList.length; i++) {
        let $td = $("<td>", { class: tdList[i].class });
        let $input = $("<input>")
          .addClass("form-control int")
          .attr("name", tdList[i].name)
          .attr("value", tdList[i].value);

        $td.append($input);
        $tr.append($td);
      }

      let $discountTd = $("<td>").addClass("discountType");
      $discountTd.append(
        $("<div>", { class: "uk-flex uk-flex-middle" })
          .append(
            $("<input>", {
              type: "text",
              name: "promotion_order_amount_range[amountValue][]",
              class: "form-control int",
              placeholder: 0,
              value: 0,
            })
          )
          .append(
            $("<select>", { class: "multipleSelect2" })
              .attr("name", "promotion_order_amount_range[amountType][]")
              .append(
                $("<option>", {
                  value: "cash",
                  text: "₫",
                })
              )
              .append(
                $("<option>", {
                  value: "percent",
                  text: "%",
                })
              )
          )
      );
      $tr.append($discountTd);

      // Add delete button
      let $deleteButton = $("<td>").append(
        $("<div>", {
          class: "delete-some-item delete-order-amount-range-condition",
        }).append(
          `<svg data-icon="TrashSolidLarge" aria-hidden="true" focusable="false" width="15" height="16" viewBox="0 0 15 16" class="bem-Svg" style="display: block;">
              <path fill="currentColor" d="M2 14a1 1 0 001 1h9a1 1 0 001-1V6H2v8zM13 2h-3a1 1 0 01-1-1H6a1 1 0 01-1 1H1v2h13V2h-1z"></path>
            </svg>`
        )
      );
      $tr.append($deleteButton);

      // Append the row to the table body
      $(".order_amount_range table tbody").append($tr);

      // Initialize select2
      HT.promotionMultipleSelect2();
    });
  };

  HT.promotionMultipleSelect2 = () => [
    $(".multipleSelect2").select2({
      //   minimumInputLength: 2,
      placeholder: "click vào ô để lựa chọn...",
      //   ajax: {
      //     url: "ajax/attribute/getAttribute",
      //     type: "GET",
      //     dataType: "json",
      //     deley: 250,
      //     data: function (params) {
      //       return {
      //         search: params.term,
      //         option: option,
      //       };
      //     },
      //     processResults: function (data) {
      //       return {
      //         results: data.items,
      //       };
      //     },
      //     cache: true,
      //   },
    }),
  ];

  HT.deleteAmountRangeCondition = () => {
    $(document).on(
      "click",
      ".delete-some-item, .delete-order-amount-range-condition",
      function () {
        let _this = $(this);
        _this.closest("tr").remove(); // Sử dụng closest để tìm tr gần nhất
      }
    );
  };
  HT.renderOrderRangeConditionContainer = () => {
    $(document).on("change", ".promotionMethod", function () {
      let _this = $(this);
      let option = _this.val();

      switch (option) {
        case "order_amount_range":
          HT.renderOrderAmountRange();
          console.log("oder_amount_range");
          break;

        case "product_and_quantity":
          HT.renderProductQuantity();

          break;

        // case "product_quantity_range":
        //   console.log("product_quantity_range");

        //   break;
        // case "goods_discount_by_quantity":
        //   console.log("goods_discount_by_quantity");

        //   break;
        default:
          HT.removePromotionContainer();
      }
    });
    let method = $(".preload_promotionMethod").val();
    if (method.length && typeof method != "undefined") {
      $(".promotionMethod").val(method).trigger("change");
    }
  };
  HT.removePromotionContainer = () => {
    $(".promotion-container").html("");
  };

  HT.renderOrderAmountRange = () => {
    let $tr;
    let order_amount_range = JSON.parse(
      $(".input_order_amount_range").val()
    ) || {
      amountFrom: ["0"],
      amountTo: ["0"],
      amountValue: ["0"],
      amountType: ["cash"],
    };
    console.log(order_amount_range);

    for (let i = 0; i < order_amount_range.amountFrom.length; i++) {
      let $amountFrom = order_amount_range.amountFrom[i];
      let $amountTo = order_amount_range.amountTo[i];
      let $amountType = order_amount_range.amountType[i];
      let $amountValue = order_amount_range.amountValue[i];
      $tr += ` <tr>
      <td class="order_amount_range_from">
        <input type="text" 
               name="promotion_order_amount_range[amountFrom][]" 
               id=""
               class="form-control int td-range"
               placeholder="0"
               value="${$amountFrom}"
          >
      </td>
      <td class="order_amount_range_to">
          <input type="text" 
                 name="promotion_order_amount_range[amountTo][]" 
                 id=""
                 class="form-control int td-range"
                 placeholder="0"
                 value="${$amountTo}"
            >
        </td>
        <td class="discountType">
        <div class="uk-flex uk-flex-middle">
          <input type="text" 
          name="promotion_order_amount_range[amountValue][]" 
          id=""
          class="form-control int"
          placeholder="0"
          value="${$amountValue}"
     >
     <select name="promotion_order_amount_range[amountType][]" id="" class = "multipleSelect2">
      <option value="cash" ${$amountType == "cash" ? "selected" : ""}>đ</option>
      <option value="percent" ${
        $amountType == "percent" ? "selected" : ""
      }>%</option>

     </select>
        </div>
        </td>
        <td>
         <div class="delete-some-item delete-order-amount-range-condition">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="red">
                                                    <path d="M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6v12zm3.46-7.88 1.41-1.41L12 12.59l1.12-1.12 1.41 1.41L13.41 14l1.12 1.12-1.41 1.41L12 15.41l-1.12 1.12-1.41-1.41L10.59 14l-1.12-1.12zM18 4h-3.5l-1-1h-5l-1 1H6v2h12V4z" />
                                                </svg>
                                            </div>
        </td>
  </tr>`;
    }

    let html = `  
    <div class="order_amount_range">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-right">giá trị tự</th>
                <th class="text-right">giá trị đến</th>
                <th class="text-right">chiết khấu (%)</th>
                <th class="text-right"></th>
            </tr>
        </thead>
        <tbody>
           ${$tr}
        </tbody>
    </table>
    <button class="btn btn-success  btn-customer btn-js-100" value ="" type = "button">
        Thêm điều kiện
    </button>
</div>
`;
    HT.renderPromionalContainer(html);
  };
  HT.renderProductQuantity = () => {
    let selectData = JSON.parse($(".input-product-and-quantity").val());
    let selectHtml = "";
    let moduleType = $(".preload_select-product-and-quantity").val();
    for (let key in selectData) {
      selectHtml +=
        "<option" +
        (moduleType.length &&
        typeof moduleType !== "undefined" &&
        moduleType == key
          ? "selected"
          : "") +
        ' value="' +
        key +
        '">' +
        selectData[key] +
        "</option>";
    }
    let preLoadData = JSON.parse($('.input_product_and_quantity').val()) ||{
      quantity: ["1"],
      maxDiscountValue: ["0"],
      discountValue: ['0'],
      discountType: ["cash"],
    }
   
   

    let html = `
    <div class="product_and_quantity">
                         <div class="choose-module mt20">
                                <div class="fix-label" style="color: blue">
                                    Sản phẩm áp dụng
                                    <select name="module_type" id="" class="multipleSelect2 select-product-and-quantity ">
                                     ${selectHtml}
                                    </select>
                                </div>
                                 <table class="table table-striped mt20">
                                <thead>
                                    <tr>
                                        <th class="text-right" style="width: 400px">Sản phẩm mua</th>
                                        <th class="text-right" style="width: 80px">SL tối thiểu</th>
                                        <th class="text-right">Giới hạn Km</th>
                                        <th class="text-right">Chiết Khấu</th>
                                        <th class="text-right">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                           
                                        <!-- Cột "Sản phẩm mua" -->
                                        <td class="chooseProductPromotion">
                                            <div class="product-quantity">
                                                <div class="boxWrapper">
                                                    <div class="boxSearchIcon ">
                                                        <i class="fa fa-search"></i>
                                                    </div>
                                                    <!-- Danh sách sản phẩm -->
                                                    
                                                    <!-- Ô tìm kiếm -->
                                                    <div class="boxSearchInput fixGrid6" >
                                                        <button type="button"  data-toggle="modal" data-target="#findProduct" class="buttonKhanh">
                                                           Tìm theo tên 
                                                              </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                            
                                        <!-- Cột "SL tối thiểu" -->
                                        <td>
                                            <input type="text" 
                                            name="product_and_quantity[quantity]" 
                                            class="form-control 
                                            int" value="${preLoadData.quantity}">
                                        </td>
                            
                                        <!-- Cột "Giới hạn Km" -->
                                        <td class="order_amount_range_to td-range">
                                            <input type="text"
                                             name="product_and_quantity[maxDiscountValue]"
                                              class="form-control int"
                                            
                                               value="${preLoadData.maxDiscountValue}">
                                        </td>
                            
                                        <!-- Cột "Chiết khấu" -->
                                        <td class="discountType">
                                            <div class="uk-flex uk-flex-middle">
                                                 <input type="text" name="product_and_quantity[discountValue]"
                class="form-control int"
                placeholder="0"
                value="${preLoadData.discountValue}">
                    
                                                <select name="product_and_quantity[discountType]" class="multipleSelect2">
                                                    <option value="cash" ${preLoadData.discountType == "cash" ? "selected" : ""}>đ</option>
                                                          <option value="percent" ${
                                                            preLoadData.discountType == "percent" ? "selected" : ""
                                                              }>%</option>
                                                                 </select>
                                            </div>
                                        </td>
                            
                                        <!-- Cột "Thao tác" -->
                                        <td>
                                            <div class="delete-some-item delete-order-amount-range-condition">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="red">
                                                    <path d="M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6v12zm3.46-7.88 1.41-1.41L12 12.59l1.12-1.12 1.41 1.41L13.41 14l1.12 1.12-1.41 1.41L12 15.41l-1.12 1.12-1.41-1.41L10.59 14l-1.12-1.12zM18 4h-3.5l-1-1h-5l-1 1H6v2h12V4z" />
                                                </svg>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                           </div>`;

    HT.renderPromionalContainer(html);
  };

  HT.renderPromionalContainer = (html) => {
    $(".promotion_container").html(html);
    HT.promotionMultipleSelect2();
  };
  HT.loadProduct = (option) => {
    $.ajax({
      url: "ajax/product/loadProductPromotion",
      type: "GET",
      data: option,
      dataType: "json",
      success: function (res) {
        HT.fillToObjectList(res);
      },
      error: function (xhr, status, error) {
        console.error("Error:", error);
        console.error("Response:", xhr.responseText);
      },
    });
  };
  HT.getPaginationMenu = () => {
    $(document).on("click", ".page-link", function (e) {
      e.preventDefault();
      let _this = $(this);
      let option = {
        model: $(".select-product-and-quantity").val(),
        page: _this.text(),
        keyword: $(".search-model").val(),
      };

      HT.loadProduct(option);
    });
  };

  HT.productQuantityListProduct = () => {
    $(document).on("click", ".product-quantity", function (e) {
      e.preventDefault();
      let option = {
        model: $(".select-product-and-quantity").val(),
      };
      HT.loadProduct(option);
    });
  };
  HT.fillToObjectList = (data) => {
    switch (data.model) {
      case "Product":
        HT.fillProductToList(data.objects);
        break;
      case "ProductCatalogue":
        HT.fillProductCatalogueToList(data.objects);
        break;
      default:
        break;
    }
  };
  HT.fillProductCatalogueToList = (objects) => {
    let html = "";
    if (objects.data.length) {
      let model = $(".select-product-and-quantity").val();
      for (let i = 0; i < objects.data.length; i++) {
        let name = objects.data[i].name;
        let id = objects.data[i].id;
        let inventory =
          typeof objects.data.inventory != "undefined" ? inventory : 0;
        let couldSell =
          typeof objects.data.couldSell != "undefined" ? couldSell : 0;
        let classBox = model + "_" + id;
        let isChecked = $(".boxWrapper ." + classBox + "").length
          ? true
          : false;

        html += `
      <div class="search-object-item =" data-productId ="${id}"  data-name ="${name}">
                                <div class="uk-flex uk-flex-middle uk-flex-space-between">
                                    <div class="object-info">
                                        <div class="uk-flex uk-flex-middle">
                                            <input 
                                            type="checkbox" 
                                            name=""
                                             id=""
                                             value = "${id}"
                                              class="input-checkbox "
                                             ${isChecked ? "checked" : ""}
                                                               >
                                           
                                            <div class="object-name">
                                                <div class="name">
                                                  ${name}
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
  `;
      }
    }
    html = html + HT.paginationLinks(objects.links).prop("outerHTML");

    $(".search-list").html(html);
  };

  HT.fillProductToList = (objects) => {
    let html = "";
    if (objects.data.length) {
      let model = $(".select-product-and-quantity").val();

      for (let i = 0; i < objects.data.length; i++) {
    
        let image = objects.data[i].image;
        let name = objects.data[i].variant_name;
        let product_variant_id = objects.data[i].product_variant_id;
        let product_id = objects.data[i].id;
        let inventory =
          typeof objects.data.inventory != "undefined" ? inventory : 0;
        let couldSell =
          typeof objects.data.couldSell != "undefined" ? couldSell : 0;
        let sku = objects.data[i].sku;
        let price = objects.data[i].price;
        let classBox = model + "_" + product_id + "_" + product_variant_id;
        let isChecked = $(".boxWrapper ." + classBox + "").length
          ? true
          : false;
          let uuid = objects.data[i].uuid;

        html += `
      <div class="search-object-item =" data-productId ="${product_id}" data-variant_id = "${product_variant_id}" data-name ="${name}" data-uuid ="${uuid}">
                                <div class="uk-flex uk-flex-middle uk-flex-space-between">
                                    <div class="object-info">
                                        <div class="uk-flex uk-flex-middle">
                                            <input 
                                            type="checkbox" 
                                            name=""
                                             id=""
                                             value = "${
                                               product_id +
                                               "_" +
                                               product_variant_id
                                             }"
                                              class="input-checkbox "
                                             ${isChecked ? "checked" : ""}
                                                               >
                                            <span class="image img-scaledown">
                                                <img src="${image}"
                                                    alt="">
                                            </span>
                                            <div class="object-name">
                                                <div class="name">
                                                  ${name}
                                                </div>
                                                <div class="jscode">
                                                     Mã sp : ${sku}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="object-extra-info">
                                        <div class="price">
                                           ${addCommas(price)}
                                        </div>
                                        <div class="object-inventory">
                                           <div class="uk-flex  uk-flex-middle">
                                            <div class="text-1">Tồn kho</div>
                                            <div class="text-value">${inventory}</div>
                                            <div class="text-1 slash ">|</div>
                                            <div class="text-value">Có thể bán : ${couldSell}</div>
                                            
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
  `;
      }
    }
    html = html + HT.paginationLinks(objects.links).prop("outerHTML");

    $(".search-list").html(html);
  };
  HT.changePromotionMethod = () => {
    $(document).on("change", ".select-product-and-quantity", function () {
      // $(".fixGrid6").remove();
    });
  };
  HT.paginationLinks = (links) => {
    let nav = $("<nav>");
    if (links.length > 3) {
      let paginationUl = $("<ul>").addClass("pagination"); // Tạo phần tử <ul> cho pagination

      $.each(links, function (index, link) {
        let liClass = "page-item"; // Mặc định class cho mỗi page item

        // Nếu đây là trang đang hoạt động
        if (link.active) {
          liClass += " active disabled";
        } else if (!link.url) {
          liClass += " disabled"; // Nếu không có URL, thì disable item này
        }

        let li = $("<li>").addClass(liClass); // Tạo phần tử <li>

        // Xử lý các nút "previous"
        if (link.label === "pagination.previous") {
          let span = $("<span>")
            .addClass("page-link")
            .attr("aria-hidden", true)
            .html("&laquo;"); // Sử dụng ký hiệu "<<" cho "previous"
          li.append(span);

          // Xử lý các nút "next"
        } else if (link.label === "pagination.next") {
          let span = $("<span>")
            .addClass("page-link")
            .attr("aria-hidden", true)
            .html("&raquo;")
            .attr("data-page", link.label); // Sử dụng ký hiệu ">>" cho "next"
          li.append(span);

          // Nếu là các trang thông thường
        } else if (link.url) {
          let a = $("<a>")
            .addClass("page-link")
            .text(link.label)
            .attr("href", link.url)
            .attr("data-page", link.label); // Tạo link cho mỗi trang
          li.append(a);
        }

        paginationUl.append(li); // Thêm <li> vào <ul>
      });

      // Bọc <ul> vào một <nav> tag
      // Trả về HTML của phần tử <nav>
      nav.append(paginationUl);
    }
    return nav;
  };

  HT.searchObject = () => {
    let typingTimer;
    let doneTypingInterval = 1000;

    $(document).on("keyup", ".search-model", function (e) {
      let _this = $(this);
      let keyword = _this.val().trim();
      let option = {
        model: $(".select-product-and-quantity").val(),
        keyword: keyword,
      };

      clearTimeout(typingTimer);
      typingTimer = setTimeout(function () {
        HT.loadProduct(option);
      }, doneTypingInterval);
    });
  };
  var objectChoose = [];
  HT.chooseProductPromotion = () => {
    $(document).on("click", ".search-object-item", function (e) {
      e.preventDefault();
      let _this = $(this);
      let isChecked = _this.find("input[type=checkbox]").prop("checked");

      let objectItem = {
        product_id: _this.attr("data-productid"),
        product_variant_id: _this.attr("data-variant_id"),
        name: _this.attr("data-name"),
        uuid: _this.attr("data-uuid"),

      };

      if (isChecked) {
        objectChoose = objectChoose.filter(
          (item) => item.product_id !== objectItem.product_id
        );
        _this.find("input[type=checkbox]").prop("checked", false);
      } else {
        objectChoose.push(objectItem);
        _this.find("input[type=checkbox]").prop("checked", true);
      }
    });
  };
  HT.confirmProductPromotion = () => {
    let preLoadObject = JSON.parse($('.input_object').val()) ||{
      id:[],
      product_variant_id:[],
  
      name:[],
      variant_uuid :[],
       }
   
  
      
       let objectArray = [];
       if(preLoadObject.id &&  preLoadObject.id.length >0){
        objectArray = preLoadObject.id.map((id,index) =>({
          product_id: id ||'null',
          product_variant_id: preLoadObject.product_variant_id[index] || 'null',
      
          name: preLoadObject.name[index] || 'null',
          uuid: preLoadObject.variant_uuid[index] || 'null',

        }))
      }
      if(objectArray.length && typeof objectArray!== 'undefined'){
       let preloadHtml = HT.renderBoxWrapper(objectArray)
        HT.checkFixGrid(preloadHtml);
        }

      }
      
      

    $(document).on("click", ".confirm-product-promotion", function (e) {
      e.preventDefault();
     let html =   HT.renderBoxWrapper(objectChoose)
      HT.checkFixGrid(html);
      $('#findProduct').modal('hide')
       
         

    });
  
  HT.renderBoxWrapper = (objectData) =>{
   console.log(objectData);
   
        let html =''
      let model = $(".select-product-and-quantity").val();

    if (objectData.length) {
   
      for (let i = 0; i < objectData.length; i++) {
        let {product_id,product_variant_id,name,uuid} = objectData[i]
         let classBox=`${model}_${product_id}_${product_variant_id}`
         if(!$(`.boxWrapper.${classBox}`).length){
          html += `<div class ="fixGrid6 ${classBox}"> 
          <div class="goods-item">
        <a class="goods-item-name" title =${name} >
            ${name}
        </a>
            <button class="delete-goods-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" 
            width="24" height="24" fill="currentColor">
             <path d="M3 6h18v2H3V6zm2 3h14l-1 13H6L5 9zm6 2v8h2v-8h-2zM9 9h6l-1 10H10L9 9zM10 3h4v2h-4V3z" />
            </svg>
        </button>
    
        <div class="hidden">
        <input type="text" name = "object[id][]" value ="${product_id}">
        <input type="text" name = "object[product_variant_id][]" value ="${product_variant_id}">
        <input type="text" name = "object[variant_uuid][]" value ="${uuid}">
        <input type="text" name = "object[name][]" value ="${name}">
    
      </div>  
       </div>
          </div> `;
        }
      
      }

    }

    
    return html;
  }
  HT.checkFixGrid = (html) => {
    if ($(".fixGrid6").elExist()) {
      $(".boxSearchIcon").remove();
      $(".boxWrapper").prepend(html);
    } else {
      $(".fixGrid6").remove();
      $(".boxWrapper").prepend(HT.boxSearchIcon());
    }
  };
  HT.boxSearchIcon = () => {
    return `<div class="boxSearchIcon ">
        <i class="fa fa-search"></i>
         </div>`;
  };
  HT.deleteGoodsItem = () => {
    $(document).on("click", ".delete-goods-item", function (e) {
      e.stopPropagation();
      let _button = $(this);
      _button.parents(".fixGrid6").remove();
      HT.checkFixGrid("");
    });
  };
  HT.checkConditionItemSet = () => {
    let checkedValue = $(".conditionItemSelected").val();
    if (checkedValue.length && $(".conditionItem").length) {
      checkedValue = JSON.parse(checkedValue);
      $(".conditionItem").val(checkedValue).trigger("change");
    }
  };
  $(document).ready(function () {
    HT.promotionNeverEnd();
    HT.promotionSource();
    HT.promotionMultipleSelect2();
    HT.chooseCustomerCondition();
    HT.chooseApplyItem();
    HT.btnJs100();
    HT.deleteAmountRangeCondition();
    HT.renderOrderRangeConditionContainer();
    // HT.deleteCondition(
    HT.productQuantityListProduct();
    HT.getPaginationMenu();
    HT.searchObject();
    HT.chooseProductPromotion();
    HT.confirmProductPromotion();
    HT.deleteGoodsItem();
    HT.changePromotionMethod();
    HT.checkConditionItemSet();
  });
})(jQuery);
