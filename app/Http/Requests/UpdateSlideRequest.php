<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSlideRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            'name' =>'required',
            'keyword'=>'required|unique:slides,keyword, '.$this->id.'',
            'slide.image'=>'required',
    
        ];
    }
    
    public function messages(): array
    {
        return [
            'name.required' => 'Bạn chưa nhập Tên của slide',
            'keyword.required' => 'Bạn chưa nhập từ khóa của slide',
            'slide.image.required'=>'bạn chưa chọn hình ảnh'
        ];
    }
}