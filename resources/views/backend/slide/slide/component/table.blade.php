<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>
            <input type="checkbox" value="" id="checkAll" class="input-checkbox">
        </th>
        <th>Tên nhóm</th>
        <th>Từ khóa</th>
        <th>Danh sách Hinh anh</th>
        <th class="text-center">Tình Trạng</th>
        <th class="text-center">Thao tác</th>
    </tr>
    </thead>
    <tbody>
        @if(isset($slides) && is_object($slides))
            @foreach($slides as $slide)
            <tr >
                <td>
                    <input type="checkbox" value="{{ $slide->id }}" class="input-checkbox checkBoxItem">
                </td>
                <td>
                    {{ $slide->name }}
                </td>
                <td>
                    {{ $slide->keyword }}
                </td>
                <td>
                    <div style="display: flex; gap: 15px; align-items: center;">
                        @foreach ($slide->item as $groupKey => $items) <!-- Top-level loop -->
                            @foreach ($items as $key => $val) <!-- Nested loop -->
                                <div style="text-align: center;">
                                    @if (!empty($val['image']))
                                        <img src="{{ $val['image'] }}" alt="{{ $val['alt'] ?? 'Image' }}" style="width: 100px; height: auto;">
                                    @else

                                    @endif
                                    <p style="margin: 5px 0;"><strong>Name:</strong> {{ $val['name'] ?? 'N/A' }}</p>
                                    <p style="margin: 5px 0;"><strong>Description:</strong> {{ $val['description'] ?? 'N/A' }}</p>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </td>
                
                
                
              
              
                <td class="text-center js-switch-{{ $slide->id }}"> 
                    <input type="checkbox" value="{{ $slide->publish }}" class="js-switch status " data-field="publish" data-model="{{ $config['model'] }}" {{ ($slide->publish == 2) ? 'checked' : '' }} data-modelId="{{ $slide->id }}" />
                </td>
                <td class="text-center"> 
                    <a href="{{ route('slide.edit', $slide->id) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="{{ route('slide.delete', $slide->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        @endif
    </tbody>
</table>
{{  $slides->links('pagination::bootstrap-4') }}
