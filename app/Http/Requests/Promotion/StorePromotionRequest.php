<?php

namespace App\Http\Requests\Promotion;

use Illuminate\Foundation\Http\FormRequest;


class StorePromotionRequest extends FormRequest
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
        $date = $this->only('startDate' ,'endDate');

        $rules =[
       'name' =>'required',
            'code'=>'required',
            'startDate'=>'required',
        
 
        ];
        if(!$this->input('neverEndDate')){
            $rules['endDate'] = 'required';
        }
       $method = $this->only('method');
 

        return  $rules;
    }
    
    public function messages(): array
    {
        $messages=[
            'name.required' => 'Bạn chưa nhập Tên của khuyến mãi',
            'code.required' => 'Bạn chưa nhập từ khóa của khuyến mãi',
            'startDate.unique' => 'Bạn chưa nhập vào ngày bắt đầu khuyến mại',
          
        ];
        if(!$this->input('neverEndDate')){
            $rules['endDate.required'] = 'Bạn chưa chọn ngày kết thúc của khuyến mại';
            $rules['endDate.after'] = 'Ngày kết thúc khuyến mại phải lớn hơn ngày bắt đầu';

        }
        return  $messages;
    }
}