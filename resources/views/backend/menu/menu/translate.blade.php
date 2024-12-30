@php
    $title =
        str_replace('{languages}', $language->name, $config['seo']['translate']['title']) . '' . $menuCatalogue->name;
@endphp
@include('backend.dashboard.component.breadcrumb', ['title' => $title])
<form action="{{ route('menu.translate.save',['languageId' =>$languageId]) }}" method = "post">
    @csrf
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-4">
    
    
                <div class="panel-title">Thông tin chung</div>
                <div class="panel-body">
                    <p>Hệ thống tự động lấy ra bản dịch của các Menu nếu có <span class="text-success">Nếu có</span></p>
                    <p>Cập nhật các thông tin về bản dịch cho các Menu của bản phía bên phải <span
                            class="text-success"></span>
                        Menu đến vị trí mong muốn</p>
                    <p>Lưu ý cập nhật thông tin
                        <span class='text-success'>Quản lý menu con</span>
                    </p>
    
                </div>
            </div>
    
            <div class="col-lg-8">
                <div class="ibox">
                    <div class="ibox-title ">
                        <div class="uk-flex uk-flex-middle uk-flex-space-between">
                            <h5 style="margin: 0">Danh sách bản dịch</h5>
    
                        </div>
    
                    </div>
                    <div class="ibox-content">
                        @if (count($menus))
                            @foreach ($menus as $key => $val)
                                @php
                                    $name = $val->languages->first()->pivot->name;
                                    $canonical = $val->languages->first()->pivot->canonical;
                                @endphp
                                <div
                                    class="menu-translate-item 0" >
                                    <div class="row">
                                        <div class="col-lg-12 mb10"><div class="text-danger text-bold">Menu : {{ $val->position }}</div></div>
                                        <div class="col-lg-6">
                                            <div class="form-row">
                                                <div class="uk-flex uk-flex-middle">
                                                    <label class="menu-name">Tên Menu</label>
                                                    <input type="text" value= "{{ $name }}"
                                                        class = "form-control" id="" autocomplete="off" disabled>
                                                </div>
                                            </div>
    
                                            <div class="form-row">
                                                <div class="uk-flex uk-flex-middle">
                                                    <label class="menu-name">Đường dẫn</label>
                                                    <input type="text" value=   "{{ $canonical }}"
                                                        class = "form-control" id="" autocomplete="off" disabled>
                                                </div>
                                            </div>
    
    
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-row">
                                                <input type="text" value= "{{ ($val->translate_name) ??''  }}" name = "translate[name][]"
                                                    class = "form-control" id=""
                                                    placeholder="Nhập vào bản dịch của bạn ..." autocomplete="off">
                                            </div>
    
                                            <div class="form-row">
    
                                                <input type="text" value= "{{ ($val->translate_canonical) ??''  }}" name = "translate[canonical][]"
                                                    class = "form-control" id=""
                                                    placeholder="Nhập vào bản dịch của bạn ..." autocomplete="off">
                                                    
                                                    <input type="hidden" value= "{{ ($val->id) ??''  }}" name = "translate[id][]"
                                                    class = "form-control" id=""
                                                    placeholder="Nhập vào bản dịch của bạn ..." autocomplete="off"> 
                                            </div>
    
    
                                        </div>
                                    </div>
                                    <hr>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <button class="btn btn-primary" type="submit" name="send" value="send">Lưu lại</button>
</form>
</div>
