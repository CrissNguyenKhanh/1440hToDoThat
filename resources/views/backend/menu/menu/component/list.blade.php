<div class="row">
    <div class="col-lg-5">
        <div class="ibox">
            <div class="ibox-content">
                <div class="panel-group" id="accordion">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Liên kết tự
                                    tạo</a>
                            </h5>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="panel-title">Tạo Menu</div>
                                <div class="panel-description">
                                    <p>+ Cài đặt menu mà bạn muốn hiển thị.</p>
                                    <p>
                                        <small class="text-danger">
                                            * Khi khởi tạo menu, bạn phải chắc chắn rằng đường dẫn của menu có hoạt
                                            động.
                                            Đường dẫn trên website được khởi tạo tại các module: Bài viết, Sản phẩm, Dự
                                            án, ...
                                        </small>
                                    </p>
                                    <p>
                                        <small class="text-danger">
                                            * Tiêu đề và đường dẫn của menu không được bỏ trống.
                                        </small>
                                    </p>
                                    <p>
                                        <small class="text-danger">
                                            * Hệ thống chỉ hỗ trợ tối đa 5 cấp menu.
                                        </small>
                                    </p>
                                    <a style="color: #000; border-color: #c4cdd5; display: inline-block !important;"
                                        href="#" title="" class="btn btn-default add-menu m-b m-r right">
                                        Thêm đường dẫn
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    @foreach (__('module.model') as $key => $val)
                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" class="collapsed menu-model"
                                        data-model={{ $key }} data-parent="#accordion"
                                        href="#{{ $key }}">{{ $val }}</a>
                                </h4>
                            </div>
                            <div id="{{ $key }}" class="panel-collapse collapse " aria-expanded="false"
                                style="height:0px">
                                <div class="panel-body">
                                    <form action="" method = "get" data-model ="{{ $key }}"
                                        class="search-model">

                                        <input type="text" value = "" class ="form-control search-menu"
                                            name ="keyword" placeholder = "nhập 2 ký tự để tìm kiếm .. "
                                            autocomplete="off">


                                    </form>
                                    <div class="menu-list mt20">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Bài Viết</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="ibox">
            <div class="ibox-content">
                <div class="row">
                    <div class="col-lg-4">
                        <label for="">Tên Menu</label>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Đường dẫn</label>
                    </div>
                    <div class="col-lg-2">
                        <label for="">Vị Trí</label>
                    </div>
                    <div class="col-lg-2">
                        <label for="">Xóa</label>
                    </div>

                </div>
                @php
                $menu = old('menu' , ($menuList) ?? null);
                @endphp
                <div class="hr-line-dashed" style ="margin:10px 0"></div>
                <div class="menu-wrapper">
                    <div class="notification text-center  {{ (is_array($menu) && count($menu)) ?'none' : '' }}">
                        <h4 style="font-weight:500;ront-size:16px;color:#000"> Danh sách liên kết này chưa có bất kì
                            đường dẫn nào </h4>
                        <p style="color: #555; margin-top: 10px;">
                            Hãy nhấn vào <span style="color: blue;">"Thêm đường dẫn"</span> để bắt đầu thêm.
                        </p>

                    </div>
                 
                    @if (is_array($menu) && count($menu))
                                            @foreach ($menu['name'] as $key => $val)
                                                <div class="row mb10 menu-item">
                                                    <div class="col-lg-4">
                                                        <input type="text" 
                                                        value="{{$menu['name'][$key] }}" 
                                                        class="form-control"
                                                        name="menu[name][]" 
                                                        placeholder="Tên Menu">
                                                    </div>
                                                    <div class="col-lg-4"><input type="text" 
                                                        value="{{$menu['canonical'][$key] }}"
                                                        class="form-control"
                                                         name="menu[canonical][]"
                                                        placeholder="Đường dẫn">
                                                    </div>
                                                    <div class="col-lg-2"><input 
                                                        type="text" 
                                                        value="{{$menu['order'][$key] }}"

                                                       class="form-control int text-right" 
                                                       name="menu[order][]"
                                                            placeholder="Vị trí">
                                                    </div>
                                                    <div class="col-lg-2 text-center"><a
                                                            class="delete-menu btn btn-danger btn-sm" title="Xóa"><i
                                                                class="fa fa-trash" aria-hidden="true"></i></a>
                                                    </div>
                                                    <input type="text" class="hidden" name = "menu[id][]" value ={{ $menu['id'][$key] }}>
                                                </div>
                                            @endforeach
                                        @endif

                </div>
            </div>
        </div>
    </div>
</div>
