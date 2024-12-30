<?php   
return [
    
    'module' => [
        [
            'title' => 'Dashboard',
            'icon' => 'fa fa-database',
            'name' => ['dashboard'],
            'route'=>'dashboard/index',
            'class'=>'special
'
           
            
        ],
        [
            'title' => 'QL sản phẩm',
            'icon' => 'fa fa-cube',
            'name' => ['product','attribute'],
            'subModule' => [
                [
                    'title' => 'QL Nhóm sản phẩm',
                    'route' => 'product/catalogue/index'
                ],
                [
                    'title' => 'QL sản phẩm',
                    'route' => 'product/index'
                ],
                [
                    'title' => 'QL Loại thuộc tính',
                    'route' => 'attribute/catalogue/index'
                ],
                [
                    'title' => 'QL thuộc tính',
                    'route' => 'attribute/index'
                ],

            ]
            
        ],
        [
            'title' => 'QL đơn hàng',
            'icon' => 'fa fa-shopping-bag',
            'name' => ['order'],
            'subModule' => [
                [
                    'title' => 'QL  đơn hàng',
                    'route' => 'order/index'
                ],
               

            ]
            
        ],
        [
            'title' => 'QL Nhóm khách hàng',
            'icon' => 'fa fa-user',
            'name' => ['customer','permission'],
            'subModule' => [
                [
                    'title' => 'QL Nhóm khách hàng',
                    'route' => 'customer/catalogue/index'
                ],
                [
                    'title' => 'QL khách hàng',
                    'route' => 'customer/index'
                ],
                
            ]
        ],
        [
            'title' => 'QL Maketing',
            'icon' => 'fa fa-money',
            'name' => ['promotion','source'],
            'subModule' => [
                [
                    'title' => 'QL Khuyến mại',
                    'route' => 'promotion/index'
                ],
                [
                    'title' => 'QL Nguồn Khách',
                    'route' => 'source/index'
                ],
                
            ]
        ],
        [
            'title' => 'QL Bài viết',
            'icon' => 'fa fa-file',
            'name' => ['post'],
            'subModule' => [
                [
                    'title' => 'QL Nhóm Bài Viết',
                    'route' => 'post/catalogue/index'
                ],
                [
                    'title' => 'QL Bài Viết',
                    'route' => 'post/index'
                ]
            ]
        ],
        [
            'title' => 'QL Nhóm Thành Viên',
            'icon' => 'fa fa-user',
            'name' => ['user','permission'],
            'subModule' => [
                [
                    'title' => 'QL Nhóm Thành Viên',
                    'route' => 'user/catalogue/index'
                ],
                [
                    'title' => 'QL Thành Viên',
                    'route' => 'user/index'
                ],
                [
                    'title' => 'QL Quyền',
                    'route' => 'permission/index'
                ]
            ]
        ],
        
        [
            'title' => 'QL Banner & Slide ',
            'icon' => 'fa-solid fa-images',
            'name' => ['slide'],
            'subModule' => [
            
                [
                    'title' => 'QL Slide',
                    'route' => 'slide/index'
                ]
            ]
        ],
       
        [
            'title' => 'Quản lí menu',
            'icon' => 'fa fa-bars',
            'name' => ['menu','generate','system'],
            'subModule' => [
                [
                    'title' => 'Cài đặt Menu',
                    'route' => 'menu/index'
                ],
                
                
            ]
            ],

        [
            'title' => 'Cấu hình chung',
            'icon' => 'fa fa-file',
            'name' => ['language','generate','system'],
            'subModule' => [
                [
                    'title' => 'QL Ngôn ngữ',
                    'route' => 'language/index'
                ],
                [
                    'title' => 'QL Module',
                    'route' => 'generate/index'
                ],
                [
                    'title' => 'Cấu hình hệ thống',
                    'route' => 'system/index'
                ],
                [
                    'title' => 'Quản lý Widget',
                    'route' => 'widget/index'
                ],
                
            ]
            ],
      
    ],
];
