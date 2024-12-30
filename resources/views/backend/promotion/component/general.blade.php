<div class="ibox">
    <div class="ibox-title">
        <h5>thông tin chung</h5>
    </div>
    <div class="ibox-content">
        <div class="row">
            @if (!isset($offTitle))
                
    
            <div class="col-lg-6">
                <div class="form-row">
                    <label for="" class="control-label text-left">Tên chương trình<span
                            class="text-danger">(*)</span></label>
                    <input type="text" name="name"
                        value="{{ old('name', $model->name ?? '') }}" class="form-control"
                        placeholder="nhập vào tên khuyến mãi" autocomplete="off">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-row">
                    <label for="" class="control-label text-left">Mã khuyến mãi {!! ($offTitle) ?' <span
                            class="text-danger">(*)</span></label>' : '' !!}</label>
                    <input type="text" name="code"
                        value="{{ old('code', $model->code ?? '') }}" class="form-control"
                        placeholder="Nếu là mã khuyến mãi thì để hệ thống tự tạo" autocomplete="off">
                </div>
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-row">
                    <label for="" class="control-label text-left">Mô tả khuyến mại<span
                            class="text-danger">(*)</span></label>
                    <textarea style="height: 100px" name="description" class="form-control form-textarea">
                        {{ old('description', $model->description ?? '') }}
                    </textarea>
                </div>
            </div>
        </div>
    </div>
</div>