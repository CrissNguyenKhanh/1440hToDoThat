@include('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['create']['title']])
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@php
    $url = $config['method'] == 'create' ? route('source.store') : route('source.update', $source->id);
@endphp
<form action="{{ $url }}" method="post" class="box">
    @csrf
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-9">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Thông tin Nguồn Khách</h5>
                    </div>
                    <div class="ibox-content sourceContent">
                        @include('backend.dashboard.component.content', [
                            'offTitle' => false,
                            'offContent' => true,
                            'model' =>($source)??null
                        ])
                    </div>
                </div>

               
            </div>
            <div class="col-lg-3">
                @include('backend.source.component.aside')
            </div>
        </div>
        <hr>

        <div class="text-right mb15">
            <button class="btn btn-primary" type="submit" name="send" value="send">Lưu lại</button>
        </div>
    </div>
</form>
