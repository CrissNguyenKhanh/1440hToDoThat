<div class="ibox slide-setting slide-normal">
    <div class="ibox-title">
        <h5> cài đặt cơ bản</h5>
    </div>
    <div class="ibox-content">
        <div class="row mb15">
            <div class="col-lg-12">
                <div class="form-row">
                    <label for="" class="control-label text-left">Tên slide <span
                            class="text-danger">(*)</span></label>
                    <input type="text" name="name" value="{{ old('name', $slide->name ?? '') }}"
                        class="form-control" placeholder="" autocomplete="off">
                </div>
            </div>
            <div class="col-lg-12 mb10">
                <div class="form-row">
                    <label for="" class="control-label text-left">Từ khóa <span
                            class="text-danger">(*)</span></label>
                    <input type="text" name="keyword" value="{{ old('keyword', $slide->keyword ?? '') }}"
                        class="form-control" placeholder="" autocomplete="off">
                </div>
            </div>

        </div>
        <div class="row ">
            <div class="col-lg-12">
                <div class="setting-item">
                    <div class="uk-flex uk-flex-middle">
                        <span class="setting-text">
                            chiều rộng
                        </span>
                        <div class="setting-value">
                            <input 
                            type="text"
                             class="form-control int"
                              id=""
                              name = "setting[width]"
                              value ="{{ old('setting.width',($slide->setting['width']) ?? null ) }}"
                            >
                            <div class="px">px</div>
                        </div>
                    </div>
                </div>
                <div class="setting-item">
                    <div class="uk-flex uk-flex-middle">
                        <span class="setting-text">
                            chiều cao
                        </span>
                        <div class="setting-value">
                            <input 
                            type="text"
                             class="form-control int"
                              id=""
                              name = "setting[high]"
       value ="{{ old('setting.high',($slide->setting['high']) ?? null ) }}"

                              >
                            <div class="px">px</div>
                        </div> 
                    </div>
                </div>
                <div class="setting-item">
                    <div class="uk-flex uk-flex-middle">
                        <span class="setting-text">
                            Hiệu ứng
                        </span>
                        <div class="setting-value">
                            <select name="setting[animation]" id="" class="form-control setupSelect2">
                                @foreach (__('module.effect') as $key => $val)
                                    <option 
                                        {{ $key == old('setting.animation', $slide->setting['animation'] ?? null) ? 'selected' : '' }} 
                                        value="{{ $key }}">
                                        {{ $val }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
                    </div>
                </div>
                <div class="setting-item">
                    <div class="uk-flex uk-flex-middle">
                        <span class="setting-text">
                            mũi tên
                        </span>
                        <div class="setting-value">
                            <input 
                            type="checkbox"
                             name="setting[arrow]" 
                             value = "accept"
                             @if(!old() || old('setting.arrow',$slide->setting['arrow']) == 'accept')
                            checked ="checked"        @endif
                     
   
                             >
                        </div>
                    </div>
                </div>
                <div class="setting-item">
                    <div class="uk-flex uk-flex-middle">
                        <span class="setting-text">
                          điều hướng
                        </span>
                        <div class="setting-value">
                            @foreach (__('module.navigate') as $key =>$val)
                                
                          
                            <div class="nav-setting-item uk-flex-middle">
                                <input
                                 type="radio" 
                                 value = "{{ $key }}" 
                                 name ="setting[navigate]" 
                                 id = "navigate_{{ $key }}"
                                 {{ old('setting.navigate' ,(!old()) ? 'dots' : ($slide->setting['navigate']) ) === $key ? 'checked' : ''}}
                                 >
                                <label for ="navigate_{{ $key }}">{{ $val }} </label>
                            </div>
                            @endforeach
                          
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
<div class="ibox slide-setting slide-advance">
    <div class="ibox-title uk-flex-middle uk-flex-space-between">
        <h5> cài đặt nâng cao</h5>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>



        </div>
    </div>
    <div class="ibox-content">
        <div class="setting-item">
            <div class="uk-flex uk-flex-middle">
                <span class="setting-text">
                    Tự động chạy
                </span>
                <div class="setting-value">
                    <input 
                    type="checkbox"
                     name="setting[autoplay]" 
                     value="accept"
                     @if(!old() || old('setting.autoplay',
                     ($slide->setting['autoplay']) ?? null) == 'accept')
                     checked ="checked"        @endif
                     >
                     
                </div>
            </div>
        </div>
        <div class="setting-item">
            <div class="uk-flex uk-flex-middle">
                <span class="setting-text">
                    Dừng khi <br> di chuột
                </span>
                <div class="setting-value">
                    <input
                    type="checkbox"
                     name="setting[pauseHover]" 
                     value = "accept"
                     @if(!old() || old('setting.pauseHover',($slide->setting['pauseHover']) ?? null) == 'accept')
                     
                     checked ="checked"        @endif
                     >
                </div>
            </div>
        </div>
        <div class="setting-item">
            <div class="uk-flex uk-flex-middle">
                <span class="setting-text">
                    chuyển ảnh
                </span>
                <div class="setting-value">
                    <input 
                    type="text"
                     class="form-control"
                      name= "setting[animationDelay]"
                      value ="{{ old('setting.animationDelay',($slide->setting['animationDelay']) ?? null)}}"
                    
                      >
                    <span class="px">ms</span>
                </div>
            </div>
        </div>
        <div class="setting-item">
            <div class="uk-flex uk-flex-middle">
                <span class="setting-text">
                    Tốc độ <br>hiệu ứng
                </span>
                <div class="setting-value">
                    <input 
                    type="text"
                     class="form-control"
                      id=""
                      name= "setting[animationSpeed]"
                    value = "{{ old('setting.animationSpeed',($slide->setting['animationSpeed']) ?? null) }}"
                      >
                    <span class="px">ms</span>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div class="ibox short-code">
    <div class="ibox-title">
        <h5>Short Code</h5>
    </div>
    <div class="ibox-content">
        <textarea name="short_code" id="" class="textarea form-control">{{ old('short_code' , ($slide->short_code) ?? null) }}</textarea>
    </div>
</div> 