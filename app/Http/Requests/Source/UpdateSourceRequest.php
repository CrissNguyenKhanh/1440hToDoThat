<?php

namespace App\Http\Requests\Source;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSourceRequest extends FormRequest
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
            'keyword'=>'required|unique:sources,keyword, '.$this->id,

    
        ];
    }
    
    public function messages(): array
    {
        return [
            'name.required' => 'Bạn chưa nhập Tên của Nguồn Khách',
            'keyword.required' => 'Bạn chưa nhập từ khóa của Nguồn Khách',
            'keyword.unique' => 'từ khóa đã tồn tại ,hãy chọn từ khóa khác',


        ];
    }
}
