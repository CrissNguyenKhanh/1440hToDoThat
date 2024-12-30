<?php


 return [
    'model'=>[
			'PostCatalogue' =>'Nhóm bài Viết',
            'Post'=>'Bài Viết',
            'ProductCatalogue'=>'Nhóm sản phẩm',
            'Product' =>'Sản Phẩm'
    ]
    ,
    'type'=>[
        'dropdown-menu'=>'dropdownMenu',
        'mega-menu'=>'MegaMenu'
    ],
    'effect'=>[
        'fade'=>'Fade',
        'cube'=>'Cube',
         'coverflow' =>'Coverflow',
         'flip' =>'Flip',
         'cards' =>'Cards',
         'creative' =>'Creative',
    ],
    'navigate'=>[
        'hide'=>'ẩn',
        'dots'=>'Dấu Chấm',
         'thumbnails' =>'ảnh Thumbnails',
        
    ],
    'promotion'=>[
        'order_amount_range'=>'chiết khấu theo tổng giá trị đơn hàng',
        'product_and_quantity'=>'chiết khấu theo từng sản phẩm',
         'product_quantity_range' =>'chiết khấu theo số lượng sản phẩm',
         'goods_discount_by_quantity' =>'mua sản phẩm-giảm giá sản phẩm',

        
    ],
    'item'=>[
        'ProductCatalogue'=>'Loại sản phẩm',
        'Product'=>'Phiên bản sản phẩm',        
    ],
    'gender'=>[
       [
        'id'=> 1,
        'name'=>'Nam'
       ]    ,
       [
        'id'=> 2,
        'name'=>'Nữ'
       ] 
    ],
    'day'=>array_map(function($value){
        return ['id'=>$value -1 ,'name' =>$value];
         
    },range(1,31)),
      'applyStatus' => [
        [
            'id'=> "staff_take_care_customer",
            'name'=> "nhân viên phụ trách",
          ],
          [
            'id'=> "customer_group",
            'name'=> "Nhóm khách hàng",
          ],
          [
            'id'=> "customer_gender",
            'name'=> "giới tính",
          ],
          [
            'id'=> "customer_birthday",
            'name'=> "Ngày sinh",
          ],
        ],
    
         
    ];

