<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWidgetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' =>'required',
            'keyword'=>'required|unique:widgets',
            'short_code'=>'required|unique:widgets',

    
        ];
    }
    
    public function messages(): array
    {
        return [
            'name.required' => 'Bạn chưa nhập Tên của Widget',
            'keyword.required' => 'Bạn chưa nhập từ khóa của Widget',
            'keyword.unique' => 'từ khóa đã tồn tại ,hãy chọn từ khóa khác',
            'short_code.unique' => 'Short_code đã tồn tại ,hãy chọn Short_code khác',


        ];
    }
}