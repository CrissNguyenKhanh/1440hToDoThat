<div class="panel-voucher ">
                                   
    <div class="voucher-list uk-hidden">
               @for ($i = 0; $i < 2; $i++)
                   
           
               <div class="voucher-item {{ ($i == 0) ? 'active' : '' }}">
                   <div class="voucher-left">
         
                   </div>
                   <div class="voucher-right">
                       <div class="voucher-title">
                           5AFSADASDAEQEQ <span>(còn 20)</span>
                       </div>
                       <div class="voucher-description">
                           <p>khuyến mãi nhân dịp norl 24/12, giảm dó đến 50% sản phẩm</p>
                       </div>
                   </div>
               </div>
               @endfor
           </div>
 <div class="voucher-form uk-hidden">
   <input type="text" placeholder="Chọn mã giảm giá" name="voucher" value = " " readonly>
   <a href="" class="apply-voucher">Áp dụng</a>
 </div>
